<?php

use App\Role;
use App\User;
use App\Type;
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

        $type = Type::create([
            'title' => 'Rent',
        ]);
        $type = Type::create([
            'title' => 'Sale',
        ]);

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
        $user = User::create([
            'name' => 'Admin2',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('12345678'),
            'role_id' => $role->id,
        ]);


    }
}
