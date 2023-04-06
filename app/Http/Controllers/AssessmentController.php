<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;

class AssessmentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = auth()->user()->students()->get();
        $subjects = auth()->user()->subjects()->get();
        $assessments = auth()->user()->assessments()->get();
        return view('pages.assessments.index', [
            'students' => $students,
            'subjects' => $subjects,
            'assessments' => $assessments,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssessmentRequest $request)
    {
        try {
            Assessment::create($request->validated() + ['user_id' => auth()->user()->id]);

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
    public function show(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssessmentRequest $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}
