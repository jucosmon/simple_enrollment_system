<?php
# Rezelle June Udtohan & Jelah Marie Dango

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Student as ModelsStudent;
use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    public function index(){
        /*
        $student = new ModelsStudent([

            'name' => 'Rezelle June Udtohan',
            'student_id' => '0696453',
            'course' => 'BSIT',
            'year' => 3,
            'age' => 20,
            'sex' => 'F',
            'email' => 'udtohan@hnu.edu.ph'

        ]);
        $student->save();
*/
        #dump(Student::all());

        return view(
            'student_page',
            [
                'students' => Student::all()
            ]
        );
    }
}
# Rezelle June Udtohan & Jelah Marie Dango
