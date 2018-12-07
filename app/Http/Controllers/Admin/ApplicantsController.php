<?php

namespace App\Http\Controllers\Admin;

use App\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
    /**
     * index
     *
     */
    public function index()
    {
        $applicants = Applicant::all();

        return view('admin.applicants.index', compact('applicants'));
    }

    /**
     * destroy
     *
     * @param mixed $id
     */
    public function destroy($id)
    {
        $applicant = Applicant::find($id);

        $applicant->delete();

        return back()->with('success', 'Sikeresen törölted a jelentkezőt!');
    }
}
