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
        
        // $subCategore->categore()->associate($mainCategore);


        // factory(App\Categores::class, 20)->create();
        $this->call([
            CategoreSeeder::class,
        ]);
        factory(App\Subcategores::class, 20)->create();

        
        factory(App\Post::class, 20)
        ->create();
      
    }
}
