<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactPageDetails(Request $request) {
        $now          = Carbon::now();
        $name         = $request->input('name');
        $email        = $request->input('email');
        $message      = $request->input('message');
        $contact_time = $now->format('h:i:sa');
        $contact_date = $now->format('m-d-Y');

        $result = Contact::insert([
            'name'         => $name,
            'email'        => $email,
            'message'      => $message,
            'contact_date' => $contact_time,
            'contact_time' => $contact_date
        ]);

        return $result;

    }
}
