<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Student;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        $diagnoses = Diagnosis::all();
        return view('diagnoses.index', compact('diagnoses'));
    }

    public function create($student_id)
    {
        $diagnosis = Diagnosis::where('student_id', $student_id)->first();
        return view('diagnoses.create', compact('student_id', 'diagnosis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'condition' => 'required',
            'description' => 'nullable',
        ]);

        Diagnosis::updateOrCreate(
            ['student_id' => $request->student_id],
            $request->only(['condition', 'description'])
        );

        return redirect()->route('students.show', $request->student_id)
            ->with('success', 'Diagnosis saved successfully.');
    }

    public function show(Diagnosis $diagnosis)
    {
        return view('diagnoses.show', compact('diagnosis'));
    }

    public function edit(Diagnosis $diagnosis)
    {
        return view('diagnoses.edit', compact('diagnosis'));
    }

    public function update(Request $request, Diagnosis $diagnosis)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'condition' => 'required',
            'description' => 'nullable',
        ]);

        $diagnosis->update($request->all());

        return redirect()->route('students.show', $diagnosis->student_id)
            ->with('success', 'Diagnosis updated successfully.');
    }

    public function destroy(Diagnosis $diagnosis)
    {
        $diagnosis->delete();

        return redirect()->route('students.show', $diagnosis->student_id)
            ->with('success', 'Diagnosis deleted successfully.');
    }
}
