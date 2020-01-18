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


        
     




    //    $featured1 = new Featured;
    //    $featured1->product_name = "Not Decieded featuared  1";
    //    $featured1->old_price = "1000";
    //    #$featured1->new_price = "300";
    //    $featured1->image = "No Image";
    //    $featured1->featured = '1';
    //    $featured1->save();





    // Post With Featured

    $featured = new Featured;
    $featured->product_name = "Not Decieded featuared ";
    $featured->old_price = "300";
    $featured->new_price = "";
    $featured->image = "No image ";
    $featured->featured = '1';
    $featured->save();



       // All Posts
        $newpost = new Post;
        $newpost->title = "Mac Pro";
        $newpost->description = "This is A test For Description";
        $newpost->image = "https://purepng.com/public/uploads/large/purepng.com-macbookmacbooknotebookcomputersapple-inmacbook-familyapple-laptops-1701528360726y3thv.png";
        $newpost->price = "600";
        $newpost->featured_id = $featured->id;
        $newpost->save();
        $featured->product_name = $newpost->title;
        $featured->new_price = "600";
        $featured->image = $newpost->image;
        $featured->product_name = $newpost->title;
        $featured->save();

       

       $cn->product()->save($newpost);






    // Post With Featured2



    $featured1 = new Featured;
    $featured1->product_name = "Not Decieded featuared ";
    $featured1->old_price = "400";
    $featured1->new_price = "";
    $featured1->image = "No image ";
    $featured1->featured = '1';
    $featured1->save();



       // All Posts
        $newpost1 = new Post;
        $newpost1->title = "Car";
        $newpost1->description = "This is A test For Description";
        $newpost1->image = "https://www.hyundai.com/content/dam/hyundai/template_en/en/data/vehicle-thumbnail/product/tucson-2018/default/tucson-tl-fl-default-pc.png";
        $newpost1->price = "8000";
        $newpost1->featured_id = $featured1->id;
        $newpost1->save();
        $featured1->product_name = $newpost1->title;
        $featured1->new_price = "500";
        $featured1->image = $newpost1->image;
        $featured1->product_name = $newpost1->title;
        $featured1->save();
        $cn->product()->save($newpost1);









    //    $newpost1 = new Post;
    //    $newpost1->title = "hyundai";
    //    $newpost1->description = "This is A test For Description";
    //    $newpost1->image = " https://www.dlf.pt/png/big/15/151322_car-back-view-png.png";
    //    $newpost1->price = "950";
    //    $newpost1->featured_id = $featured->id;
    //    $newpost1->save();
    //    $featured->image = $newpost1->image;
    //    $featured->product_name =$newpost1->title;
    //    $featured->save();


    //   $cn->product()->save($newpost1);

    



        // End All Posts

  
        
  
  
        

      


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
