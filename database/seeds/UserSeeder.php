<?php

use Illuminate\Database\Seeder;
use App\Admin;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'olshop1',
            'email' => 'olshop1@seed.com',
            'password' => 'password',
            'website' => 'olshop1.com',
            'storename' => 'olshop1',
            'role' => 'admin',
        ]);
        Admin::create([
            'username' => 'olshop2',
            'email' => 'olshop2@seed.com',
            'password' => 'password',
            'website' => 'olshop2.com',
            'storename' => 'olshop2',
            'role' => 'admin',
        ]);
    }
}
