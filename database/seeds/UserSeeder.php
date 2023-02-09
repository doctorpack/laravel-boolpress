<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Spiderman',
                'email' => 'spiderman@gmail.com',
                'password' => Hash::make('spiderman'),
            ],
            [
                'name' => 'Uomoragno',
                'email' => 'uomoragno@gmail.com',
                'password' => Hash::make('Uomoragno'),
            ],
            [
                'name' => 'Bistecca',
                'email' => 'Bistecca@gmail.com',
                'password' => Hash::make('Bistecca'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        };
    }
}
