<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = 'Admin';
        $user->email = 'admin@admin.com';
        $user->role = 0;
        $user->password = bcrypt('welkom');
        $user->save();

        factory(User::class, 4)->create();
    }
}
