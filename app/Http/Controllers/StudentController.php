<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search_value = $request->first_name;
        if ($search_value) {
            $filtered_students = $request->query('first_name');
            $students = Student::where('first_name', 'LIKE', "%$filtered_students%")->get();
        } else $students = Student::all();
        return view('home', compact('students', 'search_value'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $student = new Student();
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birth' => 'required|string',
            'city' => 'required|string'
        ]);
        $student->fill($data);
        $student->save();
        return to_route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->all();
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'birth' => 'required|string',
            'city' => 'required|string'
        ]);
        $student->update();
        return to_route('comic.show', compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return to_route('home');
    }



    public function trash(string $id)
    {

        return view(route('students.trash'));
    }
}
