<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('page.welcome');
    }

    public function about(): View
    {
        return view('page.about');
    }
}
