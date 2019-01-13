<?php

namespace App\Models\Backend;

use App\Model\Frontend\Contact;
use App\Models\Frontend\Image;
use App\Models\Frontend\Profile;
use App\Models\Frontend\Quiz;
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

    public function quiz()
    {
        return $this->hasOne(Quiz::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /***
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     */
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function images()
    {
        $this->hasManyThrough(Image::class, Profile::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
