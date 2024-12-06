<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $jobs = JobListing::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('welcome', compact('jobs'));
    }
}
