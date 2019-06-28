<?php

namespace App\Models\Frontend\Donor;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DQProgress extends Model
{
    protected $table = 'dq_progress';

    protected $fillable = ['user_id', 'last_dq_saved_step_url'];


    public function updateOrCreate($request)
    {
        $last_dq_saved_step_url = route('donor-questionnaire') . '#step-' . $request->current_step;

        $request->user()
            ->progress()
            ->updateOrCreate(['user_id' => $request->user()->id],
                ['last_dq_saved_step_url' => $last_dq_saved_step_url]
            );
    }

    public static function getLastDQSavedStepURL()
    {
        $user = Auth::user();


        $url = DQProgress::select('last_dq_saved_step_url')->where('user_id', $user->id)->get();

        return $url[0]->last_dq_saved_step_url;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
