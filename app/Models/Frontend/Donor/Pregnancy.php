<?php

namespace App\Models\Frontend\Donor;


use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Pregnancy extends Model
{

    protected $table = 'dn_pregnancy';
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

    public function sexualActivity()
    {
        return $this->hasOne(PhSexualActivity::class);
    }
}
