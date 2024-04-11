<?php
# Rezelle June Udtohan & Jelah Marie Dango

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    public function index(){
        $students = [
            [
                'name' => 'Zachary Albert Legaria',
                'id' => '0693233',
                'course' => 'BSIT',
                'year' => '3',
                'age' => 20,
                'sex' => 'M',
                'email' => 'legaria@hnu.edu.ph'
            ],
            [
                'name' => 'Jelah Marie Dango',
                'id' => '0692343',
                'course' => 'BSIT',
                'year' => '3',
                'age' => 22,
                'sex' => 'F',
                'email' => 'dango@hnu.edu.ph'
            ],
            [
                'name' => 'Rezelle June Udtohan',
                'id' => '0696453',
                'course' => 'BSIT',
                'year' => '3',
                'age' => 20,
                'sex' => 'F',
                'email' => 'udtohan@hnu.edu.ph'
            ],
            [
                'name' => 'John Dave Pangalipi',
                'id' => '0692342',
                'course' => 'BSIT',
                'year' => '1',
                'age' => 18,
                'sex' => 'M',
                'email' => 'pangalipi@hnu.edu.ph'
            ],
            [
                'name' => 'Lindsay Marie Doblas',
                'id' => '0693433',
                'course' => 'BSIT',
                'year' => '3',
                'age' => 23,
                'sex' => 'F',
                'email' => 'doblas@hnu.edu.ph'
            ],
            [
                'name' => 'Joreme Baliwis',
                'id' => '069000',
                'course' => 'BSIT',
                'year' => '3',
                'age' => 20,
                'sex' => 'M',
                'email' => 'baliwis@hnu.edu.ph'
            ],
            [
                'name' => 'Fretchel Gerarman',
                'id' => '0692322',
                'course' => 'BSIT',
                'year' => '2',
                'age' => 19,
                'sex' => 'F',
                'email' => 'gerarman@hnu.edu.ph'
            ],
            [
                'name' => 'Justine Piquero',
                'id' => '0694323',
                'course' => 'BSIT',
                'year' => '2',
                'age' => 20,
                'sex' => 'F',
                'email' => 'piquero@hnu.edu.ph'
            ],
            [
                'name' => 'Dianne Milagro',
                'id' => '069234',
                'course' => 'BSIT',
                'year' => '1',
                'age' => 18,
                'sex' => 'F',
                'email' => 'milagro@hnu.edu.ph'
            ],
            [
                'name' => 'Jay R Liabako',
                'id' => '093452',
                'course' => 'BSMA',
                'year' => '4',
                'age' => 23,
                'sex' => 'M',
                'email' => 'liabako@hnu.edu.ph'
            ],
            [
                'name' => 'Justin Dumaran',
                'id' => '069234',
                'course' => 'BSMT',
                'year' => '1',
                'age' => 18,
                'sex' => 'M',
                'email' => 'dumaran@hnu.edu.ph'
            ]
            ];
        return view(
            'student_page',
            [
                'students' => $students
            ]
        );
    }
}
# Rezelle June Udtohan & Jelah Marie Dango
