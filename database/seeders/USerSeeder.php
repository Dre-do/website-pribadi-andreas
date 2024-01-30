<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name' => 'Andreas Situmorang',
            'email' => 'andreastumorang@gmail.com',
            'password' => Hash::make('Dre.do13'),
        ]);

        User::create([
            'name' => 'Andreas Domenico',
            'email' => 'andreasdomenico@gmail.com',
            'password' => Hash::make('Dre.do131'),
        ]);
        

    }
}
