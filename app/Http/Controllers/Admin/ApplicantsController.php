<?php

namespace App\Http\Controllers\Admin;

use App\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();

        return view('admin.applicants.index', compact('applicants'));
    }
}
