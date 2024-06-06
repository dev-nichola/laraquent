<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            "name" => "Super Admin"
        ]);

        Role::create([
            "name" => "Admin"
        ]);

        User::create([
            "name" => "Super Admin",
            "email" => "superadmin",
            "password" => bcrypt("123")
        ]);

        Phone::create([
            "user_id" => 3,
            "phone_number" => "0123456789"
        ]);

        
    }
}
