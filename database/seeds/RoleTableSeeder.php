<?php

use Illuminate\Database\Seeder;
use INTEGRATEITM\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=new Role();
        $role->name="admin";
        $role->description="Super Admin b.....";
        $role->save();

        $role=new Role();
        $role->name="user";
        $role->description="Normal guy";
        $role->save();
    }
}
