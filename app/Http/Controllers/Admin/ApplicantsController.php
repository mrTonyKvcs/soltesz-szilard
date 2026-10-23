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
        $applicants = Applicant::with(['training' => fn ($query) => $query->withTrashed()])->get();

        return view('admin.applicants.index', compact('applicants'));
    }

    /**
     * destroy
     *
     * @param mixed $id
     */
    public function destroy($id)
    {
        $applicant = Applicant::findOrFail($id);

        $applicant->delete();

        return back()->with('success', 'Sikeresen törölted a jelentkezőt!');
    }
}
