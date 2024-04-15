<?php
# Jelah Marie Dango & Rezelle June Udtohan

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'name',
        'course',
        'year',
        'age',
        'sex',
        'email'
    ];
}
# Jelah Marie Dango & Rezelle June Udtohan
