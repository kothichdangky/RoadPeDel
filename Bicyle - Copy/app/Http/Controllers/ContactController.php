<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs\ContactUsJob;
use App\Mail\ContactUs;
use App\Mail\Enquiry;
use App\Models\Message as ModelsMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message; // Đúng namespace cho Message

class ContactController extends Controller
{
    public function send() {
//    Mail::raw('Hello everyone', function(Message $message){
//     $message->to('duonthang1071977@gmail.com')
//     ->subject('welcome')
//     ->from('thangsos8900@gmail.com');
//    });

    // $toEmail = 'duonthang1071977@gmail.com';
    // $subject = 'Hello hen';
    // $fromEmail = 'thangsos8900@gmail.com';
    // $messageContent = 'This is a simple Email test';

    // Mail::raw($messageContent, function(Message $message) use($toEmail, $subject, $fromEmail){
    //         $message->to($toEmail)
    //         ->subject($subject)
    //         ->from($fromEmail);
    //        });

//     $toEmail = 'duonthang1071977@gmail.com';
//     $subject = 'Hello hen';
//     $fromEmail = 'thangsos8900@gmail.com';
//     $htmlContent = '<h3> this is simple email</h3> <p> this is body';

//     Mail::html($htmlContent, function(Message $message) use($toEmail, $subject, $fromEmail){
//             $message->to($toEmail)
//             ->subject($subject)
//             ->from($fromEmail);
//            });

//    return 'HTML Email sent successfully';

Mail::to('duonthang1071977@gmail.com')->send(new ContactUs());
return 'Email has been sent!';
}
    public function show() {
        return view ('bicycle.contact');
    }

    public function sendEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
            'phone' => 'required|min:5'
        ]);
        ModelsMessage::create($data);
        // dd('ok');
        // dd('Mail sent!');
        // Mail::to($data['email'])->send(new Enquiry($data));
        $job = (new ContactUsJob($data));
        dispatch($job);
        return redirect()->back()->with('success', 'Message sent succcessfully');
    }
}
