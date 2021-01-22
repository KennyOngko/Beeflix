<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class episodesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('episodes')->insert([
            ["movie_id"=>1,"episode"=>'episode 1',"title"=>'permulaan'],
            ["movie_id"=>1,"episode"=>'episode 2',"title"=>'apa yang terjadi?'],
            ["movie_id"=>1,"episode"=>'episode 3',"title"=>'entah apa'],
            ["movie_id"=>1,"episode"=>'episode 4',"title"=>'dia pergi'],
            ["movie_id"=>2,"episode"=>'episode 1',"title"=>'terlalu baik'],
            ["movie_id"=>2,"episode"=>'episode 2',"title"=>'jika dia'],
            ["movie_id"=>2,"episode"=>'episode 3',"title"=>'kamu baik bagi ku'],
            ["movie_id"=>2,"episode"=>'episode 4',"title"=>'aku pergi jauh'],
            ["movie_id"=>2,"episode"=>'episode 5',"title"=>'cinta lama kemabali'],
            ["movie_id"=>3,"episode"=>'episode 1',"title"=>'thomas datang'],
            ["movie_id"=>3,"episode"=>'episode 2',"title"=>'thomas pegi menjauh'],
            ["movie_id"=>3,"episode"=>'episode 3',"title"=>'thomas dan teman-teman'],
            ["movie_id"=>4,"episode"=>'episode 1',"title"=>'boboi episde1'],
            ["movie_id"=>4,"episode"=>'episode 2',"title"=>'boboi nikah'],
            ["movie_id"=>4,"episode"=>'episode 3',"title"=>'boboi mati'],
            ["movie_id"=>5,"episode"=>'episode 1',"title"=>'hujan turun'],
            ["movie_id"=>5,"episode"=>'episode 2',"title"=>'hujan datang'],
            ["movie_id"=>5,"episode"=>'episode 3',"title"=>'pelangi ku'],
            ["movie_id"=>6,"episode"=>'episode 1',"title"=>'cinta lama bersemi kembali'],
            ["movie_id"=>6,"episode"=>'episode 2',"title"=>'putus lagi'],
            ["movie_id"=>6,"episode"=>'episode 3',"title"=>'saat nya balikan'],
            ["movie_id"=>7,"episode"=>'episode 1',"title"=>'di kalau senja'],
            ["movie_id"=>7,"episode"=>'episode 2',"title"=>'haluan pagi hari'],
            ["movie_id"=>7,"episode"=>'episode 3',"title"=>'malan tiba'],
            ["movie_id"=>8,"episode"=>'episode 1',"title"=>'kamu baik tapi..'],
            ["movie_id"=>8,"episode"=>'episode 2',"title"=>'kalian bersyukur'],
            ["movie_id"=>8,"episode"=>'episode 3',"title"=>'bagi ku negri'],
            ["movie_id"=>9,"episode"=>'episode 1',"title"=>'megambar untuk mu'],
            ["movie_id"=>9,"episode"=>'episode 2',"title"=>'west witch'],
            ["movie_id"=>9,"episode"=>'episode 3',"title"=>'bertemu lagi'],
            ["movie_id"=>9,"episode"=>'episode 4',"title"=>'berkahirnya story ini'],
            ["movie_id"=>10,"episode"=>'episode 1',"title"=>'membunuh iblis'],
            ["movie_id"=>10,"episode"=>'episode 2',"title"=>'iblis ini'],
            ["movie_id"=>10,"episode"=>'episode 3',"title"=>'bertarung'],
            ["movie_id"=>10,"episode"=>'episode 4',"title"=>'aku sekarat'],
            ["movie_id"=>11,"episode"=>'episode 1',"title"=>'pintu ajaib'],
            ["movie_id"=>11,"episode"=>'episode 2',"title"=>'baling - baling bambu'],
            ["movie_id"=>11,"episode"=>'episode 3',"title"=>'senter ajaib'],
            ["movie_id"=>12,"episode"=>'episode 1',"title"=>'resep mr crab'],
            ["movie_id"=>12,"episode"=>'episode 2',"title"=>'plankton menang'],
            ["movie_id"=>12,"episode"=>'episode 3',"title"=>'merebut mahkota'],
            ["movie_id"=>12,"episode"=>'episode 4',"title"=>'kembali lagi'],
       ]); 
    }
}
