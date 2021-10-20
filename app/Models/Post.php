<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id', 'title', 'slug', 'content'];

    public function user(){
        return $this->belongsTo(User::class, "user_id");
        //return $this->belongsTo('App\Models\User'); //User::class
    }
    public function comment(){
        return $this->hasMany(Comment::class, "post_id");
       // return $this->hasMany('App\Models\User'); //->Post::class 
    }
}
