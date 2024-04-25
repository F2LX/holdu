<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * HoldU handles connectU on its own controller: ConnectU Controller for views and return stuff
     */
    public function index()
    {
        return view('connectu.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validate([
            "content" => "required",
        ]);

        $data['user_id']=auth()->user()->id;

        Post::create($data);
        return redirect()->back()->with('success','Post uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view(); // Edit page not exist
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::find($id);
        $user=$post->user->id;
        if ($user == auth()->user()->id) {
            // Validate update if requester id == post owner
        }
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
     //
    }
}
