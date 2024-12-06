<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobListing::latest()->paginate(10);
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'company' => 'required|max:255',
            'location' => 'required|max:255',
            'salary_range' => 'required|max:255',
            'type' => 'required|max:255',
        ]);

        JobListing::create($validated);

        return redirect()->route('jobs.index')
            ->with('success', 'Job listing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobListing $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobListing $job)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'company' => 'required|max:255',
            'location' => 'required|max:255',
            'salary_range' => 'required|max:255',
            'type' => 'required|max:255',
        ]);

        $job->update($validated);

        return redirect()->route('jobs.index')
            ->with('success', 'Job listing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobListing $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
            ->with('success', 'Job listing deleted successfully.');
    }
}
