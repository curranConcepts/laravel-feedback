<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // Get all feedback
    public function index()
    {
        return view(
            'index',
            ['feedback' => Feedback::all()]
        );
    }

    // Store feedback data 
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'body' => 'required'
        ]);

        Feedback::create($formFields);

        return redirect('/');
    }

    // About page
    public function about()
    {
        return view('about');
    }
}
