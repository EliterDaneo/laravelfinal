<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Ari Setiawan',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
                'level' => 1,
            ]
        ];
        foreach ($user as $key => $u) {
            User::create($u);
        }
    }
}
