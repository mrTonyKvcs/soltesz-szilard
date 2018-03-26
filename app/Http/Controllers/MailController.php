<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Training;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendTenderToSupport(Request $request)
    {
    	// $this->validate($request, [
     //        'name'      			=> 'required',
     //        'phone'     			=> 'required',
     //        'email'                 => 'required',
     //        'vehicle_type'			=> 'required',
     //        'chassis_number'		=> 'required',
     //        'part'					=> 'required',
     //        'message'   			=> 'required|min:10|max:1000'
     //    ]);
        \Mail::send('emails.tender', ['data' => $request], function ($m) use ($request) {
            $m->to(env('MAILGUN_TO'))
	            ->subject('Jelentkezés: ' . $request->title)
		        ->from($request->email, $request->name);
        });

        // flash()->success('Köszönjük!', 'Az üzenetét elküldtük.');
        // flash()->success(trans('message.title'), trans('message.body'));
        $trainings = Training::orderBy('started_at', 'desc')->get();
    	$today = Carbon::now('Europe/London')->format('Y-M-d');


        return view('trainings.index', compact('trainings', 'today'));
    }

    public function sendMailToSupport(Request $request)
    {
        \Mail::send('emails.contact', ['data' => $request], function ($m) use ($request) {
            $m->to(env('MAILGUN_TO'))
                ->subject('Weblap: Kapcsolat')
                ->from($request->email, $request->name);
        });

        return back();
    }
}
