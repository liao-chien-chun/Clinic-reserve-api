<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentItem extends Model
{
    use HasFactory;

    protected $table = 'treatment_items';

    protected $fillable = [
        'item_name',
    ];

    // 定義與醫生的多對多關聯
    public function doctors()
    {
        return $this->belongsToMany(User::class, 'doctor_treatment_items', 'treatment_item_id', 'user_id')->withPivot([]);
    }

}
