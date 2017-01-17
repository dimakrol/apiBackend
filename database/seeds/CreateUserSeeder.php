<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Dima Krol',
            'email'  => 'dima.krol@mail.ru',
            'password' => bcrypt('123123')
        ];

        User::create($user);
    }
}
