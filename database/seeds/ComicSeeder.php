<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5 ; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->sentence(2);
            $newComic->slug = Str::slug($newComic->title);
            $newComic->save();

        }
    }
}
