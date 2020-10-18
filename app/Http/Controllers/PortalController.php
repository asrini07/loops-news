<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        //return view('pages.portal');
        $judul     = "Dashboard";
        $tabmenu     = "home";
        return view('pages/portal', compact('judul'));
    }

    public function post()
    {
        //return view('pages.portal');
        $judul     = "Dashboard";
        $tabmenu     = "post";
        return view('pages/post', compact('judul', 'tabmenu'));
    }
}
