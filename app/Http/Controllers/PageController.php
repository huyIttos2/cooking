<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('page.trangchu');
    }

    public function about()
    {
        return view('page.about');
    }

    public function cooking()
    {
        return view('page.cooking');
    }

    public function contact()
    {
        return view('page.contact');
    }
}
