<?php

namespace App\Models\Frontend;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['age'];

    public $timestamps = false;
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
