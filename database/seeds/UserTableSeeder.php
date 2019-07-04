<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use INTEGRATEITM\Role;
use INTEGRATEITM\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new user();
        $user->name= "admin";
        $user->email= "admin@integrateITM.com";
        $user->password= Hash::make('123123123');

        $user->save();

        $role=Role::where('name','admin')->first();
        $user->roles()->attach($role);
    }
}
