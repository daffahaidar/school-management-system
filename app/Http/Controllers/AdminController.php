<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
}
