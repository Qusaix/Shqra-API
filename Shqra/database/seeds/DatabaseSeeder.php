<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Subcategores;
use App\Categores;
use App\Order;
use App\User;
use App\Ads;
use App\Post;
use App\Sales;
use App\Featured;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() 
    {
       $cn = new Categores();
       $cn->description = "This is the description of the categore";
       $cn->Title = "Computers";
       $cn->save();

        $newpost = new Post;
        $newpost->title = "New Product";
        $newpost->description = "The news product ever";
        $newpost->image = "https://www.dlf.pt/png/big/15/151322_car-back-view-png.png";
        $newpost->price = "600";
        $newpost->save();

       $cn->product()->save($newpost);


        $featured = new Featured;
        $featured->product_name = $newpost->title;
        $featured->old_price = "500";
        $featured->new_price = "300";
        $featured->image = "https://www.dlf.pt/png/big/15/151322_car-back-view-png.png";
        $featured->featured = '0';
        $featured->save();
        
        $newpost->featured()->associate($newpost);

      


        $ad = new Ads;
        $ad->title = "Iphone X";
        $ad->description = "This is a Big Jump From last Generation ";
        $ad->price = "500";
        $ad->old_price = "1000";
        $ad->image = 'https://www.masabi.com/wp-content/uploads/2013/01/iphone-7-perspective-screen-1.png';
        $ad->save();

        $this->call([
            CategoreSeeder::class,
            RoleSeeder::class,
        ]);

        factory(App\Post::class, 20)
        ->create();
       

      
       


    }
}
