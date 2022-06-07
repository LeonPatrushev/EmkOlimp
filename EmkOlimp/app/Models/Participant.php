<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'participant_full_name',
        'participants_email',
        'name_institution',
        'specialization',
        'course',
        'teacher_full_name',
        'teacher_phone_number',
        'teacher_email'
    ];
}
