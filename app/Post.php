<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'caption', 'photo',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
