<?php

namespace App\Http\Controllers;

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
	            ->subject('Weblap: Jelentkezés')
		        ->from($request->email, $request->name);
        });

        // flash()->success('Köszönjük!', 'Az üzenetét elküldtük.');
        // flash()->success(trans('message.title'), trans('message.body'));

        return back();
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
