<?php

namespace App\Models\Frontend\Donor;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    protected $table = 'dn_medical_history';
    public $timestamps = false;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicalIllness()
    {
        return $this->hasOne(S2Illness::class);
    }

    public function surgicalList()
    {
        return $this->hasOne(S2Surgical::class);
    }

    public function medicationList()
    {
        return $this->hasOne(S2Medication::class);
    }

    public function supplementList()
    {
        return $this->hasOne(S2Suppliment::class);
    }

    public function allergyList()
    {
        return $this->hasOne(S2Allergy::class);
    }

}
