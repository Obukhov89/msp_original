<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $arrAuth =
            [
                'login' => $request->login,
                'password' => $request->password
            ];

        $user = new User();

        return $user->login($arrAuth);
    }
}
