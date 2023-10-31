<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddMedicineRequest;
use App\Http\Requests\UpdateMedicineRequest;
use App\Http\Resources\Admin\Medicines\GetAllMedicineCollection;
use App\Http\Resources\Admin\Medicines\GetMedicineResource;
use App\Repositories\Admin\MedicineRepo;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function add(AddMedicineRequest $addMedicineRequest , MedicineRepo $medicineRepo)
    {
        $result = $medicineRepo->add($addMedicineRequest);
        return response()->json($result);
    }

    public function update($id , UpdateMedicineRequest $updateMedicineRequest , MedicineRepo $medicineRepo)
    {
        $result = $medicineRepo->update($id , $updateMedicineRequest);
        return response()->json($result);
    }

    public function delete($id , MedicineRepo $medicineRepo)
    {
        $result = $medicineRepo->delete($id);
        return response()->json($result);
    }

    public function getAll(MedicineRepo $medicineRepo)
    {
        return new GetAllMedicineCollection($medicineRepo->getAll());
    }

    public function get($id , MedicineRepo $medicineRepo)
    {
        return new GetMedicineResource($medicineRepo->get($id));
    }
}
