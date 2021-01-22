<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class genresseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name'=>'Drama'],
            ['name'=>'Tv show'],
            ['name'=>'Kids'],
        ]);
    }
}
