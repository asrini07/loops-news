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
        $tabmenu     = "all-post";
        $data = Post::select('posts.*', 'users.email', 'users.name')
                    ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                    ->get();
        //$data = Post::all();
        //dd($data->user());
        return view('pages/post_all', compact('judul', 'tabmenu', 'data'));
    }

    public function postDetail($slug){
        $judul     = "Dashboard";
        $tabmenu     = "all-post";
        $data = Post::select('posts.*', 'users.email', 'users.name')
                    ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                    ->where('posts.slug', $slug)
                    ->first();
        return view('pages/post_detail', compact('judul', 'tabmenu', 'data'));
    }

    public function postEmal(){
        // $data = User::find(1);
        // $data_post = $data->posts()->get();

        // foreach ($data_post as $key => $value) {
        //     $val[] = [
        //         'name' => $value->user->name,
        //         'title' => $value->title
        //     ];
        // }
        // dd($val);
        // dd('Content Post dengan email, name penulisnya');
        $judul     = "Dashboard";
        $tabmenu   = "post-email";

        $data = Post::select('posts.*', 'users.email', 'users.name')
                    ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                    ->get();

        return view('pages/post_email', compact('judul', 'tabmenu', 'data'));

    }

    public function userComment(){
        //dd('User List dengan comment dari usernya');
        $judul     = "Dashboard";
        $tabmenu   = "user-comment";

        $data = User::select('users.email', 'users.name', 'comments.comment', 'comments.created_at')
                    ->join('comments', 'comments.email', '=', 'users.email')
                    ->get();

        return view('pages/user_comment', compact('judul', 'tabmenu', 'data'));
    }

    public function userCommentGuest(){
        $judul     = "Dashboard";
        $tabmenu   = "guest-comment";

        $data = Comment::select('users.id', 'users.name as username', 'comments.website', 'comments.name', 'comments.comment', 'comments.created_at')
                    ->leftJoin('users', 'comments.email', '=', 'users.email')
                    ->whereNull('users.id')
                    ->get();
                    
        return view('pages/guest_comment', compact('judul', 'tabmenu', 'data'));
    }
}
