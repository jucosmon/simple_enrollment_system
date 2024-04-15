{{-- Jelah Marie Dango & Rezelle June G. Udtohan --}}
@extends('layout.layout')

@section('content')
    <div class="centered-container">
        <div class="custom-form">
            <form action="{{ route('student.create') }}" method="get">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">
                        Please enter the student's name.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="student_id" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="student_id" name="student_id" required>
                    <div class="invalid-feedback">
                        Please enter the student's ID.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="course" name="course" required>
                    <div class="invalid-feedback">
                        Please enter the student's course.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control" id="year" name="year" required>
                    <div class="invalid-feedback">
                        Please enter the student's year.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" required>
                    <div class="invalid-feedback">
                        Please enter the student's age.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sex" class="form-label">Sex</label>
                    <input type="text" class="form-control" id="sex" name="sex" required>
                    <div class="invalid-feedback">
                        Please enter the student's sex.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
{{-- Jelah Marie Dango & Rezelle June G. Udtohan --}}
