<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TreatmentItem;

class TreatmentItemController extends Controller
{
    /**
     * Undocumented function
     *
     * @return 
     */
    public function index()
    {
        $treatment_items = TreatmentItem::all()->makeHidden(['created_at', 'updated_at']);

        return response()->json([
            'success' => true,
            'status' => 200,
            'message' => '取得所有治療項目成功',
            'data' => $treatment_items
        ], 200);
    }
}
