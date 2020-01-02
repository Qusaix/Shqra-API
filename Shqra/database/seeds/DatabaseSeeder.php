<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Subcategores;
use App\Categores;
use App\Order;
use App\User;
use App\Ads;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() 
    {
        
        // $subCategore->categore()->associate($mainCategore);


        // factory(App\Categores::class, 20)->create();
        $this->call([
            CategoreSeeder::class,
        ]);
        factory(App\Subcategores::class, 20)->create();

        
        factory(App\Post::class, 20)
        ->create()
        ->each(function($post){
            $post->subcategore()->associate(factory(App\Subcategores::class)->make());
        });

      
        $role = Role::create(['name' => 'writer']);
        $permission = Permission::create(['name' => 'edit articles']);

        $roleAdmin = Role::create(['name' => 'admin']);

        $adminRole = Role::find(2);

        $admin = new user;
        $admin->name = 'Admin';
        $admin->password = bcrypt(123456);
        $admin->email = 'admin@ecommers.com';
        $admin->zip_code = '1215';
        $admin->phone = '044578952';
        $admin->save();
        $admin->assignRole($adminRole);


        $ad = new Ads;
        $ad->title = "Iphone X";
        $ad->description = "This is a Big Jump From last Generation ";
        $ad->price = "500";
        $ad->old_price = "1000";
        $ad->image = 'https://www.masabi.com/wp-content/uploads/2013/01/iphone-7-perspective-screen-1.png';
        $ad->save();



    }
}
