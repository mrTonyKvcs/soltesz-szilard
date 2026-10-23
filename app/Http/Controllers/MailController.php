<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendTenderToSupport(Request $request)
    {
        $data = $request->validate([
            'training_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
        ]);
        $training = Training::findOrFail($data['training_id']);
        DB::transaction(function () use ($data, $training) {
            Applicant::create($data);
            $this->send('emails.tender', $data + ['title' => $training->title], 'Jelentkezés: '.$training->title);
        });

        return redirect()->route('trainings.index')->with('success', 'Sikeresen jelentkeztél az eseményre!');
    }

    public function sendMailToSupport(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:10000',
        ]);
        $this->send('emails.contact', $data, 'Weblap: Kapcsolat');

        return redirect()->route('pages.contact')->with('success', 'Sikeresen elküldted az üzenetet!');
    }

    private function send(string $view, array $data, string $subject): void
    {
        Mail::send($view, ['data' => (object) $data], function ($mail) use ($data, $subject) {
            $mail->to(config('mail.support_address'))
                ->subject($subject)
                ->replyTo($data['email'], $data['name']);
        });
    }
}
