<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $user1 = new User();
        $user1->name = 'Melissa Rummer';
        $user1->email = 'melissa.rummer@sbg.at';
        $user1->password = bcrypt('abc123');
        $user1->save();
        */
        User::factory(10)->create();
    }
}
