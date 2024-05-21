<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Diagnosis;

class AdminStudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $students = Student::where('studID', 'LIKE', "%{$search}%")
                ->orWhere('studFirstName', 'LIKE', "%{$search}%")
                ->orWhere('studMiddleName', 'LIKE', "%{$search}%")
                ->orWhere('studLastName', 'LIKE', "%{$search}%")
                ->orWhere('studCollege', 'LIKE', "%{$search}%")
                ->orWhere('studProgram', 'LIKE', "%{$search}%")
                ->get();
        } else {
            $students = Student::all();
        }

        return view('admin.students.index')->with('students', $students);
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'studID' => 'required|string|max:11',
            'studFirstName' => 'required|string|max:25',
            'studMiddleName' => 'nullable|string|max:25',
            'studLastName' => 'required|string|max:25',
            'studYear' => 'required|string|max:10',
            'studCollege' => 'required|string|max:50',
            'studProgram' => 'required|string|max:50',
            'studAge' => 'required|string|max:2',
            'studGender' => 'required|string|max:6',
            'studEmail' => 'required|email|max:50',
            'studContact' => 'required|string|max:20',
            'condition' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $student = Student::create($request->only([
            'studID', 'studFirstName', 'studMiddleName', 'studLastName', 'studYear',
            'studCollege', 'studProgram', 'studAge', 'studGender', 'studEmail', 'studContact'
        ]));

        Diagnosis::create([
            'student_id' => $student->id,
            'condition' => $request->condition,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.students.index')->with('flash_message', 'Student and Diagnosis Added!');
    }

    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('admin.students.edit')->with('students', $student);
    }

    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);

        return redirect()->route('admin.students.index')->with('flash_message', 'Student Updated!');
    }

    public function show(string $id)
    {
        $student = Student::find($id);
        return view('admin.students.show')->with('students', $student);
    }

    public function diagnosis($id)
    {
        // Logic to perform diagnosis for the student with ID $id
    }
}
