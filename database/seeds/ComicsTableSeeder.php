<?php

use Illuminate\Database\Seeder;
use App\models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsInfo = config('data.comics');

        foreach($comicsInfo as $comicInfo) {
            $comic = new Comic();
            $comic->title = $comicInfo['title'];
            $comic->description = $comicInfo['description'];
            $comic->thumb = $comicInfo['thumb'];
            $comic->price = $comicInfo['price'];
            $comic->series = $comicInfo['series'];
            $comic->sale_date = $comicInfo['sale_date'];
            $comic->type = $comicInfo['type'];
            $comic->save();
        }


    }
}
