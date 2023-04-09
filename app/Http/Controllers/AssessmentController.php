<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;
use App\Models\Student;
use App\Models\Subject;

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
        //dd($request->all());
        $validated = $request->validated();

        // Create the assessment instance
        $assessment = new Assessment();
        $assessment->assessment_name = $validated['assessment_name'];
        $assessment->score = implode(',', $validated['score']);
        $assessment->score_over = $validated['score_over'];
        $assessment->user_id = auth()->user()->id;

        // Save the assessment instance to the database
        if (!$assessment->save()) {
            // handle error, for example:
            return back()->withInput()->withErrors(['error' => 'Failed to save assessment']);
        }

        $assessment_id = $assessment->id;

        // Save the subject for the assessment
        $subject = Subject::where('name', $validated['subject'])->firstOrFail();
        $assessment->subjects()->syncWithoutDetaching($subject->id);

        // Save the scores for each student
        foreach ($validated['score'] as $student_id => $score) {
            $student = Student::findOrFail($student_id);
            $assessment->students()->syncWithoutDetaching([
                $student->id => [
                    'score' => $score,
                    'subject_id' => $subject->id,
                    'assessment_id' => $assessment_id,
                    'student_id' => $student_id,
                ]
            ]);
        }

        return redirect()->route('assessments.index')->with('success', 'Assessment saved successfully.');
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
