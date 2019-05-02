<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function show()
    {

        DB::table('users')->insert([
            'name' => 'Ansar Gondal',
            'class' => 'BSCS'
        ]);

    }
}
