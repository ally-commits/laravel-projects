<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::create([
           'name'=>'ADMIN',
           'email'=>'support@gsgroup.co.in',
           'role_id'=>'1',
            'password'=>bcrypt('admin')
        ]);
        \App\Role::create([
            'role'=>'admin'
        ]);
        \App\Role::create([
            'role'=>'seeker'
        ]);
        \App\Role::create([
            'role'=>'employee'
        ]);
        \App\State::create([
           'state'=>'Kerala'
        ]);
        \App\State::create([
            'state'=>'Karnataka'
        ]);
    }
}
