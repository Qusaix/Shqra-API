<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Subcategores;
use App\Categores;
use App\Order;

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
        // $mainCategore = new Categores;
        // $mainCategore->title = "مطاعم";
        // $mainCategore->description = "Test";
        // $mainCategore->save();

        // $subCategore = new Subcategores;
        // $subCategore->title = "معجنات";
        // $subCategore->description = "Test";
        // $subCategore->save();

        // $subCategore->categore()->associate($mainCategore);


        // factory(App\Categores::class, 20)->create();
        factory(App\Subcategores::class, 20)->create(); 

        factory(App\Order::class, 20)
        ->create()
        ->each(function($order){
            $order->user()->associate(factory(App\Subcategores::class)->make());
        })
        ->each(function($order){
            $order->product()->associate(factory(App\Subcategores::class)->make());
        }); 



        
        factory(App\Post::class, 20)
        ->create()
        ->each(function($post){
            $post->subcategore()->associate(factory(App\Subcategores::class)->make());
        });
      
        $role = Role::create(['name' => 'writer']);
        $permission = Permission::create(['name' => 'edit articles']);





    }
}
