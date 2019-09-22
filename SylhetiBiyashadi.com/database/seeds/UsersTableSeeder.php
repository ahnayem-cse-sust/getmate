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
            'name' => 'admin',
            'email' => 'admin@awsometeam.com',
            'password' => Hash::make('a'),
        ]);
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        Role::create(['name' => 'new']);
        $admin->assignRole($adminRole);

        for ($i = 0; $i < 20; $i++){
            $user = User::create([
                'name' => 'User'.$i,
                'email' => 'user'.$i.'@awsometeam.com',
                'password' => Hash::make('user'.$i),
            ]);
            $user->assignRole($userRole);
            UserDetail::create([
                'user_id' => $user->id,
                'religion' => rand(),
                'height' => rand(),
                'gender' => rand(),
                'qualification' => rand(),
                'present_address' => rand(),
                'permanent_address' => rand(),
                'image' => 'demo.jpg'
            ]);
        }
    }
}
