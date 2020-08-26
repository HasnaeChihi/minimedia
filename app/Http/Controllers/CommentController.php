<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Notifications\NewCommentPosted;
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

        //Notification
        $publication->user->notify(new NewCommentPosted($publication , auth()->user()));

        return redirect()->route('publications.show' , $publication);

    }

    public function storeCommentReply(Comment $comment)
    {
        request()->validate([
            'replyComment' => 'required|min:3' // on veut au mnimum 3 caractere
        ]);

        $commentReply = new Comment();
        $commentReply->content = request('replyComment');
        $commentReply->user_id = auth()->user()->id; // pour récuperer Id de user

        $commentReply->comments()->save($commentReply);

        return redirect()->back();

    }
}
