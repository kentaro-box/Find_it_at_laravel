<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PublishRequest;
use App\User;
use App\Post;
use Auth;

class PublishController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('user.publish.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.publish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublishRequest $request)
    {
        $post = New Post;
        // dd($request);
        $data = $request->all();
        if (isset($data['image'])) {
            $filePath = $data['image']->store('public/images');
            $data['image'] = str_replace('public/images/', '', $filePath);
        }
        $data['user_id'] = Auth::user()->id;
        $post->fill($data)->save();
        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::where('user_id', $id)->get();
        return view('user.publish.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post_id)
    {
        $post = Post::find($post_id)->first();
        return view('user.publish.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PublishRequest $request, Post $post_id)
    {   
        $post = Post::find($post_id)->first();
        $data = $request->all();
        if (isset($data['image'])) {
            $filePath = $data['image']->store('public/images');
            $data['image'] = str_replace('public/images/', '', $filePath);
        }
        $data['user_id'] = Auth::user()->id;
        $post->fill($data)->save();
        return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post_id)
    {
        $delete_post = Post::find($post_id)->first()->delete();
        return redirect()->route('home')->with('message', '削除完了');
    }
}
