<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'username'          => "hakiki",
            'password'          => Hash::make('password'),
            'level'             => 'super admin',
            'status'            => 'aktif',
        ]);
        $user->save();
    }
}
