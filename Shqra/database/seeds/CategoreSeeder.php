<?php

use Illuminate\Database\Seeder;
use App\Categores;

class CategoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainCategore = new Categores;
        $mainCategore->title = "Computers & Laptops";
        $mainCategore->description = "Test";
        $mainCategore->save();

        $subCategore1 = new Categores;
        $subCategore1->title = "Cameras & Photos";
        $subCategore1->description = "Test";
        $subCategore1->save();
        
       $subCategore2 = new Categores;
        $subCategore2->title = "Cameras & Photos";
        $subCategore2->description = "Test";
        $subCategore2->save();

        $subCategore3 = new Categores;
        $subCategore3->title = "Smartphones & Tablets";
        $subCategore3->description = "Test";
        $subCategore3->save();


        $subCategore4 = new Categores;
        $subCategore4->title = "TV & Audio";
        $subCategore4->description = "Test";
        $subCategore4->save();

        $subCategore5 = new Categores;
        $subCategore5->title = "Gadgets";
        $subCategore5->description = "Test";
        $subCategore5->save();

        $subCategore6 = new Categores;
        $subCategore6->title = "Video Games & Consoles";
        $subCategore6->description = "Test";
        $subCategore6->save();

        $subCategore7 = new Categores;
        $subCategore7->title = "Accessories";
        $subCategore7->description = "Test";
        $subCategore7->save();


    }
}
