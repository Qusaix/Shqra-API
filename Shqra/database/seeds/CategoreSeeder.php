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
        $mainCategore->Title = "Computers & Laptops";
        $mainCategore->description = "Test";
        $mainCategore->save();

        $subCategore1 = new Categores;
        $subCategore1->Title = "Cameras & Photos";
        $subCategore1->description = "Test";
        $subCategore1->save();
        
       $subCategore2 = new Categores;
        $subCategore2->Title = "Games";
        $subCategore2->description = "Test";
        $subCategore2->save();

        $subCategore3 = new Categores;
        $subCategore3->Title = "Smartphones & Tablets";
        $subCategore3->description = "Test";
        $subCategore3->save();


        $subCategore4 = new Categores;
        $subCategore4->Title = "TV & Audio";
        $subCategore4->description = "Test";
        $subCategore4->save();

        $subCategore5 = new Categores;
        $subCategore5->Title = "Gadgets";
        $subCategore5->description = "Test";
        $subCategore5->save();

        $subCategore6 = new Categores;
        $subCategore6->Title = "Video Games & Consoles";
        $subCategore6->description = "Test";
        $subCategore6->save();

        $subCategore7 = new Categores;
        $subCategore7->Title = "Accessories";
        $subCategore7->description = "Test";
        $subCategore7->save();


    }
}
