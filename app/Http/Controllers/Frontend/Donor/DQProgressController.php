<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use Illuminate\Support\Facades\Auth;

class DQProgressController extends Controller
{
    public function redirect()
    {
        $user = Auth::user();

        $url = DQProgress::select('last_dq_saved_step_url')->where('user_id', $user->id)->get();


        return redirect($url[0]->last_dq_saved_step_url);
    }
}
