<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $students = auth()->user()->students()->get();
        return view('pages.students.index', [
            'students' => $students
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        try {
            Student::create($request->validated() + ['user_id' => auth()->user()->id]);

            return back()->withSuccess('Student created successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while creating the student. Please try again.']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        try {
            $validated = $request->validated();
            $student->update($validated + ['user_id' => auth()->user()->id]);
            return back()->withSuccess('Student edited successfully');
        } catch (\Exception $e) {
            return back()->withErrors('An error occurred while updating the student. Please try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        try {
            $student->delete();
            return back()->withSuccess('Student Deleted Successfully');
        } catch (\Exception $e) {
            return back()->withErrors('An error occurred while deleting the student. Please try again');
        }
    }
}
