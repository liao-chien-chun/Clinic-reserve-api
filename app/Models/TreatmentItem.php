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

}
