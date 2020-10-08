<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
	/**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the feed page.
     *
     */
    public function feed()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->latest()->get();
        return view('posts.feed', compact('posts'));
    }

    /**
    * Method to show the page to create a new post.
    *
    * @return void
    */
    public function getCreate()
    {
    	return view('posts.create');
    }

    /**
    * Method to create & store a new post.
    *
    * @return void
    */
    public function postCreate()
    {
    	$data = request()->validate([
    		'caption' 	=> 'required',
    		'photo' 	=> 'required|image'
    	]);

    	$photoPath = request('photo')->store('uploads', 'public');
    	$image = Image::make(public_path("storage/{$photoPath}"))->fit(1200,1200);
    	$image->save();
    	auth()->user()->posts()->create([
    		'caption' 	=> $data['caption'],
    		'photo' 	=> $photoPath,
    	]);

    	return redirect('/profile/'. auth()->user()->id);
    }

    /**
    * Method to show a post.
    *
    * @return void
    */
    public function getPost($postId)
    {
    	$post = Post::findorFail($postId);
        $follows = (auth()->user()) ? auth()->user()->following->contains($post->user_id) : false;
    	return view('posts.show', compact('post','follows'));
    }
}
