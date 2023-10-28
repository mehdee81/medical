<?php

namespace App\Repositories;

use App\Entities\AnswerFields;
use App\Entities\ExamFields;
use App\Entities\ExamResultFields;
use App\Handlers\ExamHandler;
use App\Http\Resources\PostExamToAiCollection;
use App\Http\Resources\PostExamToAiResource;
use App\Models\Answer;
use App\Models\Exam;
use App\Models\ExamResult;
use App\Repositories\Contracts\ExamInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ExamRepo implements ExamInterface
{

    public function createExam()
    {
        $exam = Exam::create([
            ExamFields::USER_ID->value => Auth::user()->id ,
            ExamFields::TYPE->value => 'lung cancer'
        ]);

        return (new ExamHandler())->createExam($exam);
    }

    public function saveAnswer($request)
    {

        foreach ($request->data as $answer) // passed
        {
            Answer::create([
                AnswerFields::EXAM_ID->value => $request->exam ,
                AnswerFields::QUESTION_ID->value => $answer['question'] ,
                AnswerFields::OPTION_ID->value => $answer['option']
            ]);
        }

        $exam = Exam::find($request->exam);
        $this->sendAnswersToAi($exam);

        while (true) {
            $result = $this->examResult();
            if ($this->healthReceivedApi($result)){
                break ;
            }
        }

        $exam_result = ExamResult::create([
            ExamResultFields::EXAM_ID->value => $request->exam ,
            ExamResultFields::RESULT->value => $result
        ]);

        return (new ExamHandler())->saveAnswer($exam_result);
    }

    private function sendAnswersToAi($exam)
    {
        foreach($exam->answers as $answer)
        {
            $fileds[$answer->question->examType->name] = $answer->option->index ;
        }

        Http::post('http://192.168.1.100:5050/api/lung_cancer_prediction/' , [ $fileds ]);
    }

    private function examResult()
    {
//        return Http::get('');
    }

    private function healthReceivedApi($message)
    {
        if ($message){
            return true ;
        }

        return false ;
    }


    public function getAll()
    {
        return Exam::where('user_id' , Auth::user()->id)->get() ;
    }

}
