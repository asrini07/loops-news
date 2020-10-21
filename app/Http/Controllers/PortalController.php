<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class PortalController extends Controller
{
    public function index()
    {
        //return view('pages.portal');
        $judul     = "Dashboard";
        $tabmenu     = "home";
        return view('pages/portal', compact('judul'));
    }

    public function postAll()
    {
        //return view('pages.portal');
        $judul     = "Dashboard";
        $tabmenu     = "post";
        $data = Post::all();
        dd($data);
        return view('pages/post', compact('judul', 'tabmenu'));
    }

    public function postEmal(){
        dd('Content Post dengan email, name penulisnya');
    }

    public function userComment(){
        dd('User List dengan comment dari usernya');
    }

    public function userCommentGuest(){
        dd('Comment Guest yang usernya tidak terdaftar disistem');
    }
}
