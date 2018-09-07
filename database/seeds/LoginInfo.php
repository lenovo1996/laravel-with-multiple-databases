<?php

use Illuminate\Database\Seeder;

use App\{User, Admin, Customer};

class LoginInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'phi1@gmail.com',
            'name' => 'I am User',
            'password' => bcrypt('123456')
        ]);

        Admin::create([
            'email' => 'phi2@gmail.com',
            'name' => 'I am Admin',
            'password' => bcrypt('123456')
        ]);

        Customer::create([
            'email' => 'phi3@gmail.com',
            'name' => 'I am Customer',
            'password' => bcrypt('123456')
        ]);
    }
}
