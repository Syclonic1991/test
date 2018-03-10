<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@biospets.ru',
            'name' => 'admin',
            'password' => Hash::make('secret')
        ]);
    }
}
