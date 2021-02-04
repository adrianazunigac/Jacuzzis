<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new User();
        $user->name = "Adriana Zuñiga";
        $user->email="ingadrianazunigac@gmail.com";
        $user->document = "1110486937";
        $user->remember_token="";
        $user->photo = "1612407169.jpg";
        $user->password = bcrypt("123456789");
        $user->save();
    }
}
