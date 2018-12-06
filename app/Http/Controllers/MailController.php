<?php

namespace App\Http\Controllers;

use App\Training;
use App\Applicant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendTenderToSupport(Request $request)
    {
        $this->validate( $request, [
            'name'          => 'required',
            'email'         => 'required',
            'phone_number'  => 'required',
            'description'   => 'required',
            'about_me'      => 'required'
        ]);

        Applicant::create($request->all());

        \Mail::send('emails.tender', ['data' => $request], function ($m) use ($request) {
            $m->to(env('MAILGUN_TO'))
                ->subject('Jelentkezés: ' . $request->title)
                ->from($request->email, $request->name);
        });

        $trainings = Training::all();
    	$today = Carbon::now('Europe/London')->format('Y-M-d');


        return redirect('esemenyek')->with('success', 'Sikeresen jelentkeztél az eseményre!');
    }

    public function sendMailToSupport(Request $request)
    {
        \Mail::send('emails.contact', ['data' => $request], function ($m) use ($request) {
            $m->to(env('MAILGUN_TO'))
                ->subject('Weblap: Kapcsolat')
                ->from($request->email, $request->name);
        });

        return redirect('kapcsolat')->with('success', 'Sikeresen elküldted az üzenetet!');
    }
}
