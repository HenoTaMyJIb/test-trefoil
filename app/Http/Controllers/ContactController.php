<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackSent;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required',
            // 'g-recaptcha-response' => 'required|captcha'
        ]);

        Mail::to(env('FEEDBACK_EMAIL'))->send(new FeedbackSent($data['name'], $data['email'], $data['message']));

        return response(['message' => 'ok']);
    }
}
