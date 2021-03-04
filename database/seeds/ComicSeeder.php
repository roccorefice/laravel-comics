<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // for ($i=0; $i < 5 ; $i++) { 
        //     $newComic = new Comic();
        //     $newComic->title = $faker->sentence(2);
        //     $newComic->slug = Str::slug($newComic->title);
        //     $newComic->description = $faker->text(30);
        //     $newComic->available = $faker->boolean;
        //     $newComic->cover = $faker->imageUrl(360, 360, 'animals', true, 'cats');
        //     $newComic->save();

        // }
    }
}
