<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'team' => 'management',
            'name' => 'Sahil Chahal',
            'email' => 'sahil.webroottech@gmail.com',
            'phone' => '9876543210',
            'image' => '',
            'password' => Hash::make('sahilchahal123'),
        ]);
    }
}
