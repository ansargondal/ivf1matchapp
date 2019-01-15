<?php

namespace App\Models\Frontend;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class MedicalQuestion extends Model
{
    protected $table = 'dn_medical_questions';
    public $timestamps = false;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
