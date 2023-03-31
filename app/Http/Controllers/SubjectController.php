<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Subject;

class SubjectController extends Controller
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
        $subjects = auth()->user()->subjects()->get();
        return view('pages.subjects.index', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        try {
            Subject::create($request->validated() + ['user_id' => auth()->user()->id]);

            return back()->withSuccess('Subject created!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while creating the subject. Please try again.']);
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
    public function show(Subject $subject)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        try {
            $validated = $request->validated();
            $subject->update($validated + ['user_id' => auth()->user()->id]);
            return back()->withSuccess('Subject edited!');
        } catch (\Exception $e) {
            return back()->withError('An error occurred while editing the subject. Please try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return back()->withSuccess('Subject Deleted!');
    }
}
