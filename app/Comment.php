<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function commentable()
    {
        return $this->morphTo(); 
    }
    
    public function comments()
    {
        return $this->morphMany('App\Comment' , 'commentable')->latest(); 
        //latest : c'est pour recuperer les reponses le plus recents 
    }

    public function user()
    {
        return $this->belongsTo('App\User'); 
    }

}
