{{-- Rezelle June Udtohan & Jelah Marie Dango --}}

@extends('layout.layout')

@section('content')
    <div class="container py-4 nav-covered-area">
        <h1 class="text-center mb-3">Manage Students</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="add-student-page" class="btn btn-primary">Add Student</a>
        </div>
        <table class="table table-striped table-bordered table-hover mx-auto">
            <thead class="thead-dark">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Course & Year</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student['student_id'] }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['course'] }} {{ $student['year'] }}</td>
                        <td>{{ $student['age'] }}</td>
                        <td>{{ $student['sex'] }}</td>
                        <td>{{ $student['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

{{-- Rezelle June Udtohan & Jelah Marie Dango --}}
