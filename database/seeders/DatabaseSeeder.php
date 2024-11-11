<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = User::all();

        foreach($users as $user){
            if($user->password == '12345'){
                $user->password = bcrypt($user->password);
                $user->save();
            }
        }
    }
}
