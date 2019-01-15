<?php

namespace App\Models\Frontend;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{

    protected $table = 'dn_pregnancy';
    public $timestamps = false;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
