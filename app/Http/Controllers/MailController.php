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
        $roleName = '';

        switch ($request->role){
            case "2": $roleName = 'Автор'; break;
            case "3": $roleName = "Читатель"; break;
        }

        $details = [
            'email'=> $request->email,
            'text' => 'Новая заявка на регистрацию. От пользователя '
                . $request->name . ' регистрирующегося как '. $roleName . '. Email для связи: ' . $request->email,
        ];

        Mail::to(["obukhov081189@gmail.com", "mim62@mail.ru"])->locale('ru')->send(new ContactMail($details));
    }
}
