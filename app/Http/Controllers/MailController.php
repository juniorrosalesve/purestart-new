<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use App\Mail\ContactMail;

use App\Models\Subscription;

class MailController extends Controller
{
    public function contact(Request $r) {
        $data   =   $r->except('_token');
        Mail::to('purestartllc@gmail.com')->queue(new ContactMail(
            $data,
            'contact'
        ));
        Mail::send('mails.contact', [], function ($message) use ($data) {
            $message->subject('WE RECEIVED YOUR INQUIRY!');
            $message->to($data['email']);
        });
        return 1;
    }

    public function new_mail_subscription(Request $r) {
        $checkUser  =   Subscription::where('email', $r->email)->first();
        if(!empty($checkUser)) {
            // Si el usuario ya está verificado, retornamos 0
            if($checkUser->verified) {
                return [
                    'message' => 'You are already part of the PS family. Seat back and relax!',
                    'status' => 0
                ];
            }
            // Si el usuario no está verificado y han pasado más de 5 minutos desde su creación
            $created_at = $checkUser->created_at;
            $current_time = Carbon::now();
            $difference_in_minutes = $current_time->diffInMinutes($created_at);
            if($difference_in_minutes > 5) {
                // Eliminamos el registro antiguo
                $checkUser->delete();
            } else {
                // Si no han pasado 5 minutos, retornamos 2
                return [
                    'message' => 'We have sent a verification link to your email. If you don’t see it in your inbox, please check your spam folder. Remember that you must wait at least 5 minutes to request a new verification email.',
                    'status' => 2
                ];
            }
        }
        $data   =   $r->except(['_token', 'type']);
        $data['token']  =   Hash::make($data['email']);
        Subscription::create($data);
    
        Mail::send('mails.newsletter', $data, function ($message) use ($data) {
            $message->subject('BUBBLES AND SPARKS RIGHT TO YOUR INBOX!');
            $message->to($data['email']);
        });
        return [
            'message' => 'We have sent you an email to verify your email address!',
            'status' => 1
        ];
    }

    public function test_mail() {

        return 1;
    }

    public function verify_email($token) {
        $sub    =   Subscription::where('token', $token)->first();
        if(!empty($sub))
        {
            $sub->verified  =   1;
            $sub->save();
            Mail::send('mails.offert', [], function ($message) use ($sub) {
                $message->subject('Enjoy your 10% off on your next cleaning!');
                $message->to($sub->email);
            });
            return "<script>alert('It has been successfully verified!');location.href='".env('APP_URL')."'</script>";
        }
        return "<script>alert('Your email could not be verified since this verification link does not work');location.href='".env('APP_URL')."'</script>";
    }
}
