<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        // $this->seederAdminAccount();
        // $this->seederUserAccount();
    }   

    public function seederAdminAccount()
    {
        User::create([
            'first_name' => 'Dao',
            'last_name' => 'Son',
            'username' => 'Dao Vinh Son',
            'isAdmin' => 1,
            'isActive' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }

    public function seederUserAccount()
    {
        User::factory()->count(10)->create();
    }
}
