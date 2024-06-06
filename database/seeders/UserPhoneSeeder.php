<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Santri",
            "email" => "santri@santri",
            "password" => bcrypt("123"),
        ]);

        User::create([
            "name" => "Nichola",
            "email" => "santriii@santri",
            "password" => bcrypt("123"),
        ]);

        Phone::create([
            "phone_number" => "0912731232132",
            "user_id" => 1
        ]);


        Phone::create([
            "phone_number" => "0912731232132",
            "user_id" => 2
        ]);

    }
}
