<?php

namespace App\Models\Backend;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['type', 'body', 'user_id'];


    public function getCreatedAtAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->format('M, d, Y');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
