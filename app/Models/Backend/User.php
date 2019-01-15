<?php

namespace App\Models\Backend;

use App\Model\Frontend\Contact;
use App\Models\Frontend\Education;
use App\Models\Frontend\Image;
use App\Models\Frontend\MedicalAbnormality;
use App\Models\Frontend\MedicalHistory;
use App\Models\Frontend\MedicalProblem;
use App\Models\Frontend\MedicalQuestion;
use App\Models\Frontend\Pregnancy;
use App\Models\Frontend\Profile;
use App\Models\Frontend\Quiz;
use App\Models\Frontend\SexualHistory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function quiz()
    {
        return $this->hasOne(Quiz::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /***
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     */
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function sexualHistory()
    {
        return $this->hasOne(SexualHistory::class);
    }

    public function pregnancy()
    {
        return $this->hasOne(Pregnancy::class);
    }

    public function lifestyle()
    {
        return $this->hasOne(Pregnancy::class);
    }

    public function medicalProblem()
    {
        return $this->hasOne(MedicalProblem::class);
    }

    public function medicalQuestion()
    {
        return $this->hasOne(MedicalQuestion::class);
    }

    public function medicalHistory()
    {
        return $this->hasOne(MedicalHistory::class);
    }

    public function medicalAbnormality()
    {
        return $this->hasOne(MedicalAbnormality::class);
    }


    public function images()
    {
        $this->hasManyThrough(Image::class, Profile::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
