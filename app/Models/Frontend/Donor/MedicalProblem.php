<?php

namespace App\Models\Frontend\Donor;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class MedicalProblem extends Model
{
    protected $table = 'dn_medical_problems';
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
}
