<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchUserPrescriptionRequest;
use App\Http\Resources\Pharmacy\Prescription\GetUserPrescriptionCollection;
use App\Http\Resources\Pharmacy\Prescription\GetUserPrescriptionResource;
use App\Repositories\Pharmacy\PrescriptionRepo;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function getPrescription(SearchUserPrescriptionRequest $searchUserPrescriptionRequest , PrescriptionRepo $prescriptionRepo)
    {
        return new GetUserPrescriptionResource($prescriptionRepo->getPrescription($searchUserPrescriptionRequest->code));
    }

    public function delivery($paymentId , PrescriptionRepo $prescriptionRepo)
    {
        $result = $prescriptionRepo->delivery($paymentId);
        return response()->json($result);
    }
}
