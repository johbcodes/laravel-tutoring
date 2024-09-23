<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        return view('students.create');
    }
}
