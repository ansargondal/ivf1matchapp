<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $casts = ['is_read' => 'boolean'];

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function getIdAttribute()
    {
        return sprintf('%02d', $this->attributes['id']);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
