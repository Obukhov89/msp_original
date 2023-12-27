<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{

    public function send(Request $request)
    {
        $details = [
            'email'=> $request->email,
            'text' => 'Новая заявка на регистрацию',
        ];

        Mail::to("obukhov081189@gmail.com, obuhovdi@cspu.ru")->locale('ru')->send(new ContactMail($details));
    }
}
