<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function add_comment($id, CommentRequest $req)
    {
        $comment = new Comment;
        $comment->post_id = $id;
        $comment->content = $req->input('comment');

        $comment->save();

        return redirect()->back()->with('success', 'Комментарий успешно добавлен');
    }
}
