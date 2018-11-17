<?php

namespace App\Models\Frontend;


use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getDonatedAttribute()
    {
        return $this->attributes['donated'] ? 'fa-check' : 'fa-times';
    }

    public function getAdoptedAttribute()
    {
        return $this->attributes['adopted'] ? 'fa-check' : 'fa-times';
    }
}
