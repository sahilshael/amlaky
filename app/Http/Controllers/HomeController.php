<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests, DB, Session, Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\User;

class HomeController extends Controller
{
    //

    public function index(Request $request)
    {
    	
    	return view('frontend/index');
    }

    public function signupCards(Request $request)
    {
    	
    	return view('frontend/signup-cards');
    }
}
