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


        $position = array("Graduate", "Service Holder", "Business Man");
        $gender = array("Male", "Female");
        $relagion = array("islam", "hinduism","chirstianity");

        for ($i = 0; $i < 20; $i++){
            $user = User::create([
                'name' => 'User'.$i,
                'email' => 'user'.$i.'@awsometeam.com',
                'password' => Hash::make('user'.$i),
            ]);
            $user->assignRole($userRole);
            
            UserDetail::create([
                'user_id' => $user->id,
                'religion' => $relagion[rand(0,2)],
                'height' => rand(),
                'gender' => $gender[rand(0,1)],
                'dateofbirth' => rand(1971,2019).'-01-01',
                'age' => rand(18,60),
                'qualification' =>$position[rand(0,2)],
                'present_address' => rand(),
                'permanent_address' => rand(),
                'image' => 'demo.jpg'
            ]);
        }
    }
}
