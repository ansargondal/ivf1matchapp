<?php

namespace App\Models\Frontend;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class SexualHistory extends Model
{
    protected $table = 'dn_sexual_history';
    protected $guarded = [];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
