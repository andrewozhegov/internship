<?php

use Illuminate\Database\Seeder;

class ValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('values')->insert([
            'name' => 'E'
        ]);

        // 2
        DB::table('values')->insert([
            'name' => 'D'
        ]);

        // 3
        DB::table('values')->insert([
            'name' => 'C'
        ]);

        // 4
        DB::table('values')->insert([
            'name' => 'B'
        ]);

        // 5
        DB::table('values')->insert([
            'name' => 'A'
        ]);
    }
}
