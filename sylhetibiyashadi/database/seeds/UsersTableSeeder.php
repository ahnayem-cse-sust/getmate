<?php

use App\User;
use App\UserDetail;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Afjol',
            'email' => 'afjol@sylhetibiyashadi.com',
            'password' => Hash::make('afjol-sylheti'),
        ]);
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        Role::create(['name' => 'new']);
        $admin->assignRole($adminRole);

        $admin = User::create([
            'name' => 'Ishmam',
            'email' => 'ishmam@sylhetibiyashadi.com',
            'password' => Hash::make('ishmam-sylheti'),
        ]);
        $admin->assignRole($adminRole);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@sylhetibiyashadi.com',
            'password' => Hash::make('io@011119'),
        ]);
        $admin->assignRole($adminRole);
    }
}
