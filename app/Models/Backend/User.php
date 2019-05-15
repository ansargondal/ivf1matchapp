<?php

namespace App\Models\Backend;

use App\Models\Frontend\Donor\Contact;
use App\Models\Frontend\Donor\DonorProfile;
use App\Models\Frontend\Donor\DQProgress;
use App\Models\Frontend\Donor\Education;
use App\Models\Frontend\Donor\Image;
use App\Models\Frontend\Donor\Lifestyle;
use App\Models\Frontend\Donor\MedicalAbnormality;
use App\Models\Frontend\Donor\MedicalHistory;
use App\Models\Frontend\Donor\MedicalProblem;
use App\Models\Frontend\Donor\Pregnancy;
use App\Models\Frontend\Donor\S1Question;
use App\Models\Frontend\Donor\SexualHistory;
use App\Models\Frontend\Quiz;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use CanResetPassword;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'password', 'code',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute()
    {
        return ucfirst($this->attributes['fname']) . ' ' . ucfirst($this->attributes['lname']);
    }

    public function getIntialsAttribute()
    {
        return strtoupper($this->attributes['fname'][0]) . strtoupper($this->attributes['lname'][0]);
    }

    public function getStatusClassAttribute()
    {
        return $this->getMatchedClass($this->attributes['status']);
    }

    public function getMatchedClass($status)
    {
        switch (strtolower($status)) {
            case 'new':
                return 'text-danger';
                break;
            case 'active':
                return 'text-success';
            case 'inactive':
                return 'text-warning';
                break;
            default:
                break;
        }
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

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
        return $this->hasOne(Contact::class, 'user_id');
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
        return $this->hasOne(Lifestyle::class);
    }

    public function s1Question()
    {
        return $this->hasOne(S1Question::class);
    }

    public function s2MedicalHistory()
    {
        return $this->hasOne(MedicalHistory::class);
    }

    public function medicalProblem()
    {
        return $this->hasOne(MedicalProblem::class);
    }

    public function medicalAbnormality()
    {

        return $this->hasOne(MedicalAbnormality::class);
    }


    public function images()
    {
        return $this->hasManyThrough(Image::class, DonorProfile::class);
    }

    public function profile()
    {
        return $this->hasOne(DonorProfile::class);
    }

    public function messages()
    {
//        $foreign_key = Auth::user()->hasRole('Recipient') ? 'recipient_id' : 'donor_id';

        return $this->hasMany(Message::class);
    }

    public function progress()
    {
       return $this->hasOne(DQProgress::class) ;
    }

}
