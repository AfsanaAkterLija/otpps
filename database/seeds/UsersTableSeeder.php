<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
           'name'=>'admin',
           'email'=>'admin@gmail.com',
           'password'=>bcrypt('1234'),
           'n_id'=>'123456',
           'role'=>'admin'

       ]);
    }
}
