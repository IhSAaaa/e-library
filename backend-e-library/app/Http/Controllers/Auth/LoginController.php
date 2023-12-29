<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login()
    {
        $remoteServerUrl = 'https://00c6-103-134-79-162.ngrok-free.app/login';

        $response = Http::get($remoteServerUrl);

        return $response->body();
    }
}
