<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Show the profile page.
     *
     */
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        return view('profiles.index', compact('user','follows'));
    }

    /**
     * Show the profile details edit page.
     *
     */
    public function getEdit(User $user)
    {
    	$this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    /**
     * Post the profile details form data.
     *
     */
    public function postEdit(User $user)
    {
    	$this->authorize('update', $user->profile);
    	$data = request()->validate([
    		'name' 			=> 'required',
    		'username' 		=> 'required',
    		'url' 			=> 'nullable|url',
    		'description' 	=> '',
    		'email' 		=> 'required|email',
    		'photo'			=> ''
    	]);
    	
    	if(request('photo')){
    		$photoPath = request('photo')->store('profile', 'public');
	    	$image = Image::make(public_path("storage/{$photoPath}"))->fit(1000,1000);
	    	$image->save();
            $photo = ['photo' => $photoPath];

    	}

    	auth()->user()->profile->update(array_merge($data, $photo ?? []));
    	auth()->user()->update($data);

    	return redirect('/profile/'. $user->id);
    }

    /**
     * Follow/Unfollow a user profile.
     *
     */
    public function getFollowing(User $user)
    {
        auth()->user()->following()->toggle($user->profile);
        return (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
    }
}
