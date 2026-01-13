<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InterviewController extends Controller
{
    /**
     * Display the interview questions page.
     */
    public function index(): View
    {
        $questions = __('interview.questions');

        return view('pages.interview-questions', [
            'questions' => $questions
        ]);
    }
}
