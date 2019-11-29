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
        



        // $position = array("Graduate", "Service Holder", "Business Man");
        // $gender = array("Male", "Female");
        // $relagion = array("islam", "hinduism","chirstianity");
        // $skin_color = array("White", "Medium","fair","Brown");

        // for ($i = 0; $i < 50; $i++){
        //     $user = User::create([
        //         'name' => 'User'.$i,
        //         'email' => 'user'.$i.'@awsometeam.com',
        //         'password' => Hash::make('user'.$i),
        //     ]);
        //     $user->assignRole($userRole);
            
        //     UserDetail::create([
        //         'user_id' => $user->id,
        //         'religion' => $relagion[rand(0,2)],
        //         'height' => rand(),
        //         'weight' => rand(),
        //         'skin_color' => $skin_color[rand(0,3)],
        //         'gender' => $gender[rand(0,1)],
        //         'dateofbirth' => rand(1971,2019).'-01-01',
        //         'age' => rand(17,60),
        //         'qualification' =>$position[rand(0,2)],
        //         'profession' =>$position[rand(0,2)],
        //         'present_address' => rand(),
        //         'permanent_address' => rand(),
        //         'image' => 'demo.jpg'
        //     ]);
        // }
    }
}
