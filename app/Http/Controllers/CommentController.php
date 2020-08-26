<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Publication;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Publication $publication)
    {
        request()->validate([
            'content' => 'required|min:5' // on veut au mnimum 5 caractere
        ]);

        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id; // pour récuperer Id de user

        $publication->comments()->save($comment);

        return redirect()->route('publications.show' , $publication);

    }
}
