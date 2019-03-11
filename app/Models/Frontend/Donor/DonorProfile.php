<?php

namespace App\Models\Frontend\Donor;


use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class DonorProfile extends Model
{
    protected $table = 'dn_profile';
    public $timestamps = false;
    protected $guarded = [];


    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

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

    public function getPhotoPermissionAttribute()
    {
        return $this->attributes['photo_permission'] ? true : false;
    }

    public function getDimplesAttribute()
    {
        return $this->attributes['dimples'] ? 'fa-check' : 'fa-times';
    }

    public function getGlassesAttribute()
    {
        return $this->attributes['glasses'] ? 'fa-check' : 'fa-times';
    }

    public function getStigmatismAttribute()
    {
        return $this->attributes['stigmatism'] ? 'fa-check' : 'fa-times';
    }

    public function getBaldnessAttribute()
    {
        return $this->attributes['baldness'] ? 'fa-check' : 'fa-times';
    }

    public function getBaldnessFamilyAttribute()
    {
        return $this->attributes['baldness_family'] ? 'fa-check' : 'fa-times';
    }

    public function getGrayingAttribute()
    {
        return $this->attributes['graying'] ? 'fa-check' : 'fa-times';
    }

    public function getOrthodonticWorkAttribute()
    {
        return $this->attributes['orthodontic_work'] ? 'fa-check' : 'fa-times';
    }
}
