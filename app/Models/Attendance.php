<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_id',
        'college_id',
        'classroom_id',
        'section_id',
        'doctor_id',
        'attendence_date',
        'attendence_status',
    ];
}
