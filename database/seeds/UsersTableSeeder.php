<?php

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
      //untuk admin
      App\User::create([
        'name' => 'Admin',
        'email' => 'irfan@gmail.com',
        'password' => bcrypt('admin17'),
        'role' => 'admin'
      ]);

      //untuk member
      App\User::create([
        'name' => 'Member',
        'email' => 'member@gmail.com',
        'password' => bcrypt('user17'),
        'role' => 'member'
      ]);
    }
}
