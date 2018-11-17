<?php

use App\Models\Backend\User;
use App\Models\Frontend\Image;
use App\Models\Frontend\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return voi
     * d
     */
    public function run()
    {
        //create 10 users
        $users = factory(User::class, 20)->create();

        //save 1 profile for each user
        $users->each(function ($user) {

            $profile = $user->profile()->save(factory(Profile::class)->make());
//
//            //save 4 images against each profile
            $profile->images()->saveMany(factory(Image::class, 4)->make());

        });
    }
}
