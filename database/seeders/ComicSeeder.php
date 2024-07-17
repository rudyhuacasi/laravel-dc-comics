<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load comics data from the configuration file
        $comics = config('comics');

        // Insert each comic into the 'comics' table
        foreach ($comics as $comic) {
            $serie= new Comic();

            $serie -> title = $comic['title'];
            $serie -> description = $comic['description'];
            $serie -> thumbnail = $comic['thumb'];
            $serie -> price = floatval(str_replace('$', '', $comic['price']));
            $serie -> series = $comic['series'];
            $serie->sale_date = $comic['sale_date'];            
            $serie -> type = $comic['type'];
            $serie -> artists = json_encode($comic['artists']);
            $serie -> writers = json_encode($comic['writers']);

            $serie->save();
        }
    }
}
