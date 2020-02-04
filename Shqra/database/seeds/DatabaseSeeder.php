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
        $newpost->Title = "Mac Pro";
        $newpost->description = "This is A test For Description";
        $newpost->image = "https://purepng.com/public/uploads/large/purepng.com-macbookmacbooknotebookcomputersapple-inmacbook-familyapple-laptops-1701528360726y3thv.png";
        $newpost->price = "600";
        $newpost->featured_id = $featured->id;
        $newpost->save();
        $featured->product_name = $newpost->Title;
        $featured->new_price = "600";
        $featured->image = $newpost->image;
        $featured->product_name = $newpost->Title;
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
        $newpost1->Title = "Car";
        $newpost1->description = "This is A test For Description";
        $newpost1->image = "https://www.hyundai.com/content/dam/hyundai/template_en/en/data/vehicle-thumbnail/product/tucson-2018/default/tucson-tl-fl-default-pc.png";
        $newpost1->price = "8000";
        $newpost1->featured_id = $featured1->id;
        $newpost1->save();
        $featured1->product_name = $newpost1->Title;
        $featured1->new_price = "500";
        $featured1->image = $newpost1->image;
        $featured1->product_name = $newpost1->Title;
        $featured1->save();
        $cn->product()->save($newpost1);




        // Post With Featured3



    $featured2 = new Featured;
    $featured2->product_name = "Not Decieded featuared ";
    $featured2->old_price = rand(0,1000);
    $featured2->new_price = "";
    $featured2->image = "No image ";
    $featured2->featured = '1';
    $featured2->save();



       // All Posts
        $newpost2 = new Post;
        $newpost2->Title = "Playstaion 4 Pro";
        $newpost2->description = "This is A test For Description";
        $newpost2->image = "https://pngimage.net/wp-content/uploads/2018/06/sony-playstation-4-png-1.png";
        $newpost2->price = rand(0,1000);
        $newpost2->featured_id = $featured2->id;
        $newpost2->save();
        $featured2->product_name = $newpost2->Title;
        $featured2->new_price = rand(0,1000);
        $featured2->image = $newpost2->image;
        $featured2->product_name = $newpost2->Title;
        $featured2->save();
        $cn->product()->save($newpost2);




         // Post With Featured4



    $featured4 = new Featured;
    $featured4->product_name = "Not Decieded featuared ";
    $featured4->old_price = rand(0,1000);
    $featured4->new_price = "";
    $featured4->image = "No image ";
    $featured4->featured = '1';
    $featured4->save();



       // All Posts
        $newpost4 = new Post;
        $newpost4->Title = "Xbox One X";
        $newpost4->description = "This is A test For Description";
        $newpost4->image = "https://compass-ssl.xbox.com/assets/57/9f/579fa122-7ebf-43a3-a53a-58ba27805ba5.png?n=X1X_Image-0_X1X-Purchase_1600x500.png";
        $newpost4->price = rand(0,1000);
        $newpost4->featured_id = $featured4->id;
        $newpost4->save();
        $featured4->product_name = $newpost4->Title;
        $featured4->new_price = rand(0,1000);
        $featured4->image = $newpost4->image;
        $featured4->product_name = $newpost4->Title;
        $featured4->save();
        $cn->product()->save($newpost4);



        

          // Post With Featured5



    $featured5 = new Featured;
    $featured5->product_name = "Not Decieded featuared ";
    $featured5->old_price = rand(0,1000);
    $featured5->new_price = "";
    $featured5->image = "No image ";
    $featured5->featured = '1';
    $featured5->save();



       // All Posts
        $newpost5 = new Post;
        $newpost5->Title = "LG";
        $newpost5->description = "This is A test For Description";
        $newpost5->image = "http://pngimg.com/uploads/washing_machine/washing_machine_PNG15574.png";
        $newpost5->price = rand(0,1000);
        $newpost5->featured_id = $featured5->id;
        $newpost5->save();
        $featured5->product_name = $newpost5->Title;
        $featured5->new_price = rand(0,1000);
        $featured5->image = $newpost5->image;
        $featured5->product_name = $newpost5->Title;
        $featured5->save();
        $cn->product()->save($newpost5);





         // Post With Featured6



    $featured6 = new Featured;
    $featured6->product_name = "Not Decieded featuared ";
    $featured6->old_price = rand(0,1000);
    $featured6->new_price = "";
    $featured6->image = "No image ";
    $featured6->featured = '1';
    $featured6->save();



       // All Posts
        $newpost6 = new Post;
        $newpost6->Title = "LG";
        $newpost6->description = "This is A test For Description";
        $newpost6->image = "https://www.kindpng.com/picc/m/175-1755322_samsung-tv-png-samsung-led-tv-png-transparent.png";
        $newpost6->price = rand(0,1000);
        $newpost6->featured_id = $featured6->id;
        $newpost6->save();
        $featured6->product_name = $newpost6->Title;
        $featured6->new_price = rand(0,1000);
        $featured6->image = $newpost6->image;
        $featured6->product_name = $newpost6->Title;
        $featured6->save();
        $cn->product()->save($newpost6);







           // Post With Featured7



    $featured7 = new Featured;
    $featured7->product_name = "Not Decieded featuared ";
    $featured7->old_price = rand(0,1000);
    $featured7->new_price = "";
    $featured7->image = "No image ";
    $featured7->featured = '1';
    $featured7->save();



       // All Posts
        $newpost7 = new Post;
        $newpost7->Title = "Dell Laptop";
        $newpost7->description = "This is A test For Description";
        $newpost7->image = "https://i.dell.com/sites/imagecontent/products/PublishingImages/hero/laptop-inspiron-7368t-in-504x350.png";
        $newpost7->price = rand(0,1000);
        $newpost7->featured_id = $featured7->id;
        $newpost7->save();
        $featured7->product_name = $newpost7->Title;
        $featured7->new_price = rand(0,1000);
        $featured7->image = $newpost7->image;
        $featured7->product_name = $newpost7->Title;
        $featured7->save();
        $cn->product()->save($newpost7);





        
           // Post With Featured8



    $featured7 = new Featured;
    $featured7->product_name = "Not Decieded featuared ";
    $featured7->old_price = rand(0,1000);
    $featured7->new_price = "";
    $featured7->image = "No image ";
    $featured7->featured = '1';
    $featured7->save();



       // All Posts
        $newpost7 = new Post;
        $newpost7->Title = "Mac Pro";
        $newpost7->description = "This is A test For Description";
        $newpost7->image = "https://purepng.com/public/uploads/large/purepng.com-macbookmacbooknotebookcomputersapple-inmacbook-familyapple-laptops-1701528361615rnvim.png";
        $newpost7->price = rand(0,1000);
        $newpost7->featured_id = $featured7->id;
        $newpost7->save();
        $featured7->product_name = $newpost7->Title;
        $featured7->new_price = rand(0,1000);
        $featured7->image = $newpost7->image;
        $featured7->product_name = $newpost7->Title;
        $featured7->save();
        $cn->product()->save($newpost7);




       // Post With Featured9



    $featured8 = new Featured;
    $featured8->product_name = "Not Decieded featuared ";
    $featured8->old_price = rand(0,1000);
    $featured8->new_price = "";
    $featured8->image = "No image ";
    $featured8->featured = '1';
    $featured8->save();



       // All Posts
        $newpost8 = new Post;
        $newpost8->Title = "Custom Computer";
        $newpost8->description = "This is A test For Description";
        $newpost8->image = "http://avadirect-freedomusainc1.netdna-ssl.com/pictures/750/Intel_Z370_Custom_Computer_Desktop_pc.png";
        $newpost8->price = rand(0,1000);
        $newpost8->featured_id = $featured8->id;
        $newpost8->save();
        $featured8->product_name = $newpost8->Title;
        $featured8->new_price = rand(0,1000);
        $featured8->image = $newpost8->image;
        $featured8->product_name = $newpost8->Title;
        $featured8->save();
        $cn->product()->save($newpost8);








  
        
  
  
        

      


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
