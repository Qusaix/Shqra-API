<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;




class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permission = Permission::create(['name' => 'test']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleNormalUser = Role::create(['name' => 'normal_user']);
        $roleStaff = Role::create(['name' => 'staff']);



        $adminRole = Role::find(1);

        $admin = new user;
        $admin->first_name = 'Admin';
        $admin->password = bcrypt(123456);
        $admin->email = 'admin@ecommers.com';
        $admin->zip_code = '1215';
        $admin->phone = '044578952';
        $admin->save();
        $admin->assignRole($adminRole);


    }
}
