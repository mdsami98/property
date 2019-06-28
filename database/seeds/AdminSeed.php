<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => 'Customer',
            'description' => 'Customer Role'
        ]);
        $role = Role::create([
            'name' => 'Agent',
            'description' => 'Agent Role'
        ]);
        $role = Role::create([
            'name' => 'Admin',
            'description' => 'Admin Role'
        ]);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'role_id' => $role->id,
        ]);


    }
}
