<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function archive()
    {
        return view('archive');

    }

    public function contact()
    {
        return view('contact');
    }
    public function single(){
        return view('single');
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

}
