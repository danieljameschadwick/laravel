<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;


class AuthenticationController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function register()
    {
//        $user = new User;
//        $user->username = 'dan';
//        $user->email = 'daniel@chadwk.com';
//        $user->password = Hash::make('test');
//        $user->save();

        return view('authentication.register');
    }
}
