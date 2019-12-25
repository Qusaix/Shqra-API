<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Subcategores;
use App\Categores;


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


        factory(App\Categores::class, 20)->create();
        factory(App\Subcategores::class, 20)->create();

        
        factory(App\Post::class, 20)
        ->create();
      
    }
}
