<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            "name" => "Khaptad NP Admin",
            "email" => "khaptadnationalp@gmail.com",
            "password" => "khaptadadmin@2022"
        ]);
    }
}
