<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;

use App\Models\Suscribe;

class MailController extends Controller
{
    public function suscribe(Request $r) {
        $check  =   Suscribe::where('email', $r->email)->first();
        if(!empty($check))
            return 0;
        Mail::to('purestartllc@gmail.com ')->queue(new ContactMail(
            $r->except('_token'),
            'suscribe'
        ));
        Suscribe::create($r->except('_token'));
        return 1;
    }
    public function contact(Request $r) {
        Mail::to('purestartllc@gmail.com ')->queue(new ContactMail(
            $r->except('_token'),
            'contact'
        ));
        return 1;
    }
}
