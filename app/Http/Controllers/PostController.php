<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $judul     = "Pengguna";
        $tabmenu = "post-user";
        $search = $request->name;
        
        $data = Post::where('user_id', \Auth::user()->id)->get();
       
        return view('pages/post/post', compact('judul', 'tabmenu', 'data', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul     = "Pengguna";
        $tabmenu = "post-user";
    
        return view('pages/post/create', compact('judul', 'tabmenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            'title' => 'required|min:3',
            'slug' => 'required',
            'content' => 'required',
        ])->validate();

        try {
            
            $store = new Post;
            $store->title = $request->title;
            $store->slug = $request->slug;
            $store->content = $request->content;
            $store->user_id = \Auth::user()->id;
            $store->save();

        } catch (\Error $e) {
            return \Redirect::to("/post-user")->with('err_msg', 'Gagal menambah data Post');
        }

        return \Redirect::to("/post-user")->with('sc_msg', 'Berhasil menambah data Post');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul     = "Pengguna";
        $tabmenu = "post-user";
        $data = Post::find($id);
    
        return view('pages/post/edit', compact('judul', 'tabmenu', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(), [
            'title' => 'required|min:3',
            'slug' => 'required',
            'content' => 'required',
        ])->validate();

        try {
            
            $data = Post::find($id);
            $data->title = $request->title;
            $data->slug = $request->slug;
            $data->content = $request->content;
            $data->user_id = \Auth::user()->id;
            $data->save();

        } catch (\Error $e) {
            return \Redirect::to("/post-user")->with('err_msg', 'Gagal menambah data Post');
        }

        return \Redirect::to("/post-user")->with('sc_msg', 'Berhasil menambah data Post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {      
        try{

            $data = Post::where('id',$id)->delete();

        } catch(\Error $e){
            return \Redirect::to("/post-user")->with('err_msg', 'Gagal menghapus data Pengguna');
        }

        return \Redirect::to("/post-user")->with('sc_msg', 'Berhasil menghapus data Pengguna');

    }
}
