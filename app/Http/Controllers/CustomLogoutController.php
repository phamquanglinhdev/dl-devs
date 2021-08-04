<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Cookie;

class CustomLogoutController extends Controller
{
    /**
     * @var string
     */

    public function logout()
    {
        Cookie::queue(Cookie::forget("XSRF-TOKEN"));
        Cookie::queue(Cookie::forget("laravel_session"));
        return redirect("/");
    }
}
