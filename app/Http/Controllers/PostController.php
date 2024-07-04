<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Comment;
use DB;

class PostController extends Controller
{

    public function allData()
    {
        $post = new Post;
        return view('posts',['data' => $post->orderBy('id', 'desc')->get() ]);
    }

    public function submit_post(PostRequest $req)
    {
        $post = new Post();
        $post->name = $req->input('name');
        $post->email = $req->input('email');
        $post->category = $req->input('category');
        $post->subject = $req->input('subject');
        $post->message = $req->input('message');

        $post->save();

        return redirect()->route('posts')->with('success', 'Публикация была добавлена');
    }

    public function make_post()
    {
        $post = DB::select('select name from categories');
        return view('make_post',['data' => $post]);
    }

    public function one_post($id)
    {
        $post = new Post;
        $comments = Comment::where('post_id', $id)->get();
        return view('one_post', ['data' => $post->find($id), 'comments' => $comments]);
    }

    public function delete_post($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts')->with('success', 'Сообщение было удалено');
    }

    public function edit_post($id)
    {
        $post = new Post;
        return view('edit_post', ['data' => $post->find($id)], ['bd' =>  DB::select('select name from categories')]);
    }

    public function edit_post_submit($id, PostRequest $req)
    {
        $post = Post::find($id);
        $post->name = $req->input('name');
        $post->email = $req->input('email');
        $post->category = $req->input('category');
        $post->subject = $req->input('subject');
        $post->message = $req->input('message');

        $post->save();

        return redirect()->route('one_post', $id)->with('success', 'Публикация обновлена');
    }
}
