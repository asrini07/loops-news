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

        $judul     = "Dashboard";
        $tabmenu     = "home";
        return view('pages/portal', compact('judul'));
        
    }

    public function postAll()
    {

        $judul     = "Dashboard";
        $tabmenu     = "all-post";
        $data = Post::select('posts.*', 'users.email', 'users.name')
                    ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                    ->get();

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

        $judul     = "Dashboard";
        $tabmenu   = "post-email";

        $data = Post::select('posts.*', 'users.email', 'users.name')
                    ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                    ->get();

        return view('pages/post_email', compact('judul', 'tabmenu', 'data'));

    }

    public function userComment(){

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

    public function storeComment(Request $request, $id) {

        \Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'comment' => 'required',
            'website' => 'required',
        ])->validate();

        try {
            
            $store = new Comment;
            $store->post_id = $id;
            $store->name = $request->name;
            $store->email = $request->email;
            $store->website = $request->website;
            $store->comment = $request->comment;
            $store->save();

        } catch (\Error $e) {
            return \Redirect::to("/post/detail/".$id)->with('err_msg', 'Gagal menambah data Comment');
        }

        return \Redirect::to("/post/detail/".$id)->with('sc_msg', 'Berhasil menambah data Comment');

    }
}
