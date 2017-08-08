<?php

use Illuminate\Database\Seeder;

//use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Кафка на пляже',
            'poster' => '/img/books/kafka.jpg',
            'author' => 'Харуки Мураками',
            'year' => '2002',
            'livelib' => 'https://www.livelib.ru/book/1001402358-kafka-na-plyazhe-murakami-h',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('books')->insert([
            'name' => 'Над пропастью во ржи',
            'poster' => '/img/books/catcher.jpg',
            'author' => 'Джером Дэвид Селинджер',
            'year' => '1951',
            'livelib' => 'https://www.livelib.ru/book/1001074375-the-catsher-in-the-rye-nad-propastyu-vo-rzhi-dzherom-devid-selindzher',
            'annotation'=>'Аннотации нет'
        ]);

        DB::table('books')->insert([
            'name' => 'Хоббит',
            'poster' => '/img/books/hobbit.jpg',
            'author' => 'Дж. Р. Р. Толкин',
            'year' => '1937',
            'livelib' => 'https://www.livelib.ru/book/1002207233-hobbit-dzh-r-r-tolkin',
            'annotation'=>'Аннотации нет'
        ]);
    }
}
