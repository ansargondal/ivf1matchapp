<?php

namespace App\Models\Frontend;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = [];

    protected $table = 'dn_education';

    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
