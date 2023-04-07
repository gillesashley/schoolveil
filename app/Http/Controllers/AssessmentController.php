<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;
use App\Models\Score;

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
            $assessment = Assessment::create($request->validated() + ['user_id' => auth()->user()->id]);

            foreach ($request->score as $student_id => $score) {
                $score = new Score();
                $score->assessment_id = $assessment->id;
                $score->student_id = $student_id;
                $score->score = $score;
                $score->save();
            }

            return back()->withSuccess('Assessment created successfully');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while creating the assessment. Please try again.']);
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
