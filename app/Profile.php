<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'photo', 'description', 'url',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function profilePhoto(){
        $path = ($this->photo) ? $this->photo : 'profile/nuXg5Bo2YZxvQSVTTWqxWewFKY79ybr7j3VGBA3R.png';
        return '/storage/'. $path ;
    }
}
