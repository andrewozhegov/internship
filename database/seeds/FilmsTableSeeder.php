<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'poster' => '/img/films/im-origins.jpg',
            'name' => 'Я - начало',
            'genre' => 'Жанр: Научная фантастика, Драма',
            'year' => '2014',
            'country' => 'США',
            'kinopoisk' => 'https://www.kinopoisk.ru/film/761933/',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('films')->insert([
            'poster' => '/img/films/the-theory-of-everything.jpg',
            'name' => 'Вселенная Стивена Хоккинга',
            'genre' => 'Жанр: Биография, Драма',
            'year' => '2014',
            'country' => 'Великобритания',
            'kinopoisk' => 'https://www.kinopoisk.ru/film/770973/',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('films')->insert([
            'poster' => '../../../public/assets/img/films/dead-poets-society.jpg',
            'name' => 'Общество мертвых поэтов',
            'genre' => 'Жанр: Драма',
            'year' => '1989',
            'country' => 'США',
            'kinopoisk' => 'https://www.kinopoisk.ru/film/4996/',
            'annotation'=>'Аннотации нет'
        ]);
    }
}
