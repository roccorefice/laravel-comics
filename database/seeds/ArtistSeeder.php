<?php

use Illuminate\Database\Seeder;
use App\Artist;
use Faker\Generator as Faker;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newArtist = new Artist();
            $newArtist->name = $faker->name();
            $newArtist->lastname = $faker->lastname();
            $newArtist->save();
        }
    }
}
