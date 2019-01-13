<?php

namespace App\Model\Frontend;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'dn_contacts';

    public $timestamps = false;

    protected $guarded = [

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
