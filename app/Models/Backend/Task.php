<?php

namespace App\Models\Backend;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['type', 'body', 'user_id'];

//    protected $casts = [
//        'created_at' => 'datetime:d, M Y',
//    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::createFromFormat('Y-m-d h:i:s', $this->attributes['created_at'])->format('M, d, Y');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
