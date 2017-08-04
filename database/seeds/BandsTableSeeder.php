<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'poster' => '/img/music/hannah-trigwell.jpg',
            'name' => 'Hannah Trigwell',
            'genre' => 'Жанр: Pop, Instrumental',
            'year' => '1990',
            'country' => 'Великобритания',
            'lastfm' => 'https://www.last.fm/music/Hannah+Trigwell',
            'yam' => 'https://music.yandex.ru/artist/3136230',
            'instagram' => 'https://www.instagram.com/hannahtrigwell/',
            'youtube' => 'https://www.youtube.com/user/hannahtrigwell',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('bands')->insert([
            'poster' => '/img/music/lana-del-rey.jpg',
            'name' => 'Lana Del Rey',
            'genre' => 'Жанр: Pop, Indie, Rock',
            'year' => '1985',
            'country' => 'США',
            'lastfm' => 'https://www.last.fm/ru/music/Lana%20Del%20Rey',
            'yam' => 'https://music.yandex.ru/artist/643850',
            'instagram' => 'https://www.instagram.com/lanadelrey/',
            'youtube' => 'https://www.youtube.com/user/LanaDelRey/',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('bands')->insert([

            'poster' => '/img/music/oh-wonder.jpg',
            'name' => 'Oh Wonder',
            'genre' => 'Жанр: Indie',
            'year' => '2014',
            'country' => 'Великобритания',
            'lastfm' => 'https://www.last.fm/music/Oh+Wonder',
            'yam' => 'https://music.yandex.ru/artist/3680609',
            'instagram' => 'https://www.instagram.com/ohwondermusic/',
            'youtube' => 'https://www.youtube.com/user/OhWonderMusicVEVO',
            'annotation'=>'Аннотации нет'
        ]);
    }
}
