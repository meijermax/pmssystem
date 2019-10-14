<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);



//        $post = new \App\Post();
//
//        $post->caption = $data['caption'];
//        $post->save();
//

        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->post()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' .auth()->user()->id);

//        dd(request()->all());

    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
//        dd($post);
    }
}
