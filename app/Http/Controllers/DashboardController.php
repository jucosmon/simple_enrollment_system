<?php
# Rezelle June Udtohan & Jelah Marie Dango
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = [
            [
                'name' => 'Zaki',
                'age' => 20
            ],
            [
                'name' => 'Luffy',
                'age' => 19
            ]
            ];
        return view(
            'dashboard',
            [
                'users' => $users
            ]
        );
    }
}
# Rezelle June Udtohan & Jelah Marie Dango
