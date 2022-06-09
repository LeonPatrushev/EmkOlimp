<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageDate extends Model
{
    use HasFactory;
    protected $fillable = [
        'stage_name',
        'beginning_stage',
        'end_stage'
    ];
}
