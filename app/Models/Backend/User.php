<?php

namespace App\Models\Backend;

use App\Models\Frontend\Image;
use App\Models\Frontend\Profile;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function images()
    {
        $this->hasManyThrough(Image::class, Profile::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
