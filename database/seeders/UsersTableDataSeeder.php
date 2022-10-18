<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            // 'name' => str_random(8),
            // 'email' => str_random(12).'@mail.com',
            'name' => 'tuka',
            'type' => '0',
            'email' => 'tuka@a.com',
            'password' => bcrypt('1234')
        ]);
    }
}
