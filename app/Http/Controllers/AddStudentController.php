<?php
# Jelah Marie Dango & Rezelle June Udtohan

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    public function store()
    {
    $student =  Student::create ([

        'name' => request()->get('name',''),
        'student_id' => request()->get('student_id',''),
        'course' => request()->get('course',''),
        'year' => request()->get('year',''),
        'age' => request()->get('age',''),
        'sex' => request()->get('sex',''),
        'email' => request()->get('email','')
    ]);
    return redirect()->route('student_page');
    }

}
# Jelah Marie Dango & Rezelle June Udtohan
