<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TreatmentItem;


class DoctorController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function showDoctorItems(Request $request)
    {
        // 檢查是否有傳遞 `treatment_item_id` 查詢參數
        $treatmentItemId = $request->query('treatment_item_id');

        $doctors = User::select('id', 'name')
                    ->with(['treatmentItems' => function ($query) use ($treatmentItemId) {
                        $query->select('treatment_items.id', 'treatment_items.item_name');
                    }])->get();

        // 手動處理資料，移除 pivot 資訊並檢查是否擁有指定的治療項目
        $doctors->transform(function ($doctor) use ($treatmentItemId) {
            $doctor->is_treatment_item = $doctor->treatmentItems->contains('id', $treatmentItemId);
            $doctor->treatmentItems->transform(function ($item) use ($treatmentItemId) {
                unset($item->pivot);
                return $item;
            });
            return $doctor;
        });

        return response()->json([
            'success' => true,
            'status' => 200,
            'message' => '取得所有醫生與其治療項目成功',
            'data' => $doctors
        ], 200);
    }
}
