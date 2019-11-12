<?php

use App\User;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Admin",
            'email'=> "danielquin1997@gmail.com",
            'password' => "vallenpaz",
            'rol_id' => 2
            
        ]);
    }
}
