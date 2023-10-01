<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function about_myself()
    {
        return view('about_myself.index');
    }

    public function job()
    {
        return view('job.index');
    }

    public function qualification()
    {
        return view('qualification.index');
    }

    public function skills()
    {
        return view('skills.index');
    }
}
