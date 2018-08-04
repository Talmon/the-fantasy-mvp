<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    protected $fillable = [
        'title', 'content', 'category_id','featured','slug'
    ];

    protected $dates = ['created_at','deleted_at'];


    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
