<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(array(
          'name' => 'Admin',
          'email' => 'admin@test.com',
          'password' => bcrypt('pankukas'),
          'role' => 2));
        User::create(array(
          'name' => 'Latvietis4',
          'email' => 'latvietis4@test.com',
          'password' => bcrypt('parole4'),
          'role' => 1));
        User::create(array(
          'name' => 'Latvietis2',
          'email' => 'latvietis2@test.com',
          'password' => bcrypt('parole2'),
          'role' => 1));
    }
}
