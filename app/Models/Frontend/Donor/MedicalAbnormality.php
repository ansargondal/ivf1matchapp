<?php

namespace App\Models\Frontend\Donor;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class MedicalAbnormality extends Model
{
    protected $table = 'dn_medical_abnormality';
    public $timestamps = false;

    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function chromosomalAb()
    {
        return $this->hasOne(S3ChromosomalAb::class);
    }

    public function geneticAb()
    {
        return $this->hasOne(S3GeneticAb::class);
    }

    public function cancerAb()
    {
        return $this->hasOne(S3CancerAb::class);
    }


    public function neurologicAb()
    {
        return $this->hasOne(S3NeurologicAb::class);
    }


}
