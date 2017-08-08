<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'name' => 'Photo 1',
            'image' => '/img/photos/1.jpg',
            'mic' => '/img/mic/photos/1.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 2',
            'image' => '/img/photos/2.jpg',
            'mic' => '/img/mic/photos/2.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 3',
            'image' => '/img/photos/3.jpg',
            'mic' => '/img/mic/photos/3.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 4',
            'image' => '/img/photos/4.jpg',
            'mic' => '/img/mic/photos/4.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 5',
            'image' => '/img/photos/5.jpg',
            'mic' => '/img/mic/photos/5.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 6',
            'image' => '/img/photos/6.jpg',
            'mic' => '/img/mic/photos/6.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 7',
            'image' => '/img/photos/7.jpg',
            'mic' => '/img/mic/photos/7.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 8',
            'image' => '/img/photos/8.jpg',
            'mic' => '/img/mic/photos/8.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 9',
            'image' => '/img/photos/9.jpg',
            'mic' => '/img/mic/photos/9.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 10',
            'image' => '/img/photos/10.jpg',
            'mic' => '/img/mic/photos/10.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 11',
            'image' => '/img/photos/11.jpg',
            'mic' => '/img/mic/photos/11.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 12',
            'image' => '/img/photos/12.jpg',
            'mic' => '/img/mic/photos/12.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 13',
            'image' => '/img/photos/13.jpg',
            'mic' => '/img/mic/photos/13.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 14',
            'image' => '/img/photos/14.jpg',
            'mic' => '/img/mic/photos/14.jpg',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('photos')->insert([
            'name' => 'Photo 15',
            'image' => '/img/photos/15.jpg',
            'mic' => '/img/mic/photos/15.jpg',
            'annotation'=>'Аннотации нет'
        ]);

    }
}
