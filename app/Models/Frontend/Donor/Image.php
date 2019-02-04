<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'dn_profile_images';
    protected $primaryKey = false;
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['path'];

    public static function store($request, $donor_profile)
    {
        $file = $request->file('img');

        $file_count = \count($file);

        for ($i = 0; $i < $file_count; $i++) {

            $path['path'] = $file[$i]->store('public/photos');
            $donor_profile->images()->create($path);
        }

    }

    //remove public from the path
    public function getPathAttribute($value)
    {
        return $this->attributes['path'] = substr($value, 7, strlen($value));
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
