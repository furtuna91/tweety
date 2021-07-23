<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/200?u=" . $this->email;
    }

    public function timeline()
    {
        // include all of the user's tweets
        // as well as the tweets of everyibw
        // descending order
        $following = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $following)->orWhere('user_id', $this->id)->latest()->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    // public function follow(User $user)
    // {
    //     return $this->follows()->save($user);
    // }

    // public function unfollow(User $user)
    // {
    //     return $this->follows()->detach($user);
    // }

    // public function follows()
    // {
    //     return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    // }

    // public function following(User $user)
    // {
    //     # code...
    //     return $this->follows()->where('following_user_id', $user->id)->exists();
    // }

    public function getRouteKeyName()
    {
        # code...
        return 'name';
    }
}
