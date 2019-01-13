<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['type', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
