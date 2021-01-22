<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class moviesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['genre_id'=>1,'title'=>'the world of the married','photo'=>'Images\world.jpg','description'=>'is a 2020 South Korean television series starring Kim Hee-ae, Park Hae-joon, and Han So-hee.','rating'=>8.5],
            ['genre_id'=>1,'title'=>'boy over flowes','photo'=>'Images\flower.jpg','description'=>'The series is about a working-class girl who gets tangled up in the lives of a group of wealthy young men in her high school.','rating'=>8.0],
            ['genre_id'=>3,'title'=>'thomas and friend','photo'=>'Images\thomas.jpg','description'=>'Thomas & Friends is a television series mainly based around railway engines that live on the Island of Sodor.','rating'=>7.5],
            ['genre_id'=>3,'title'=>'boboiboy','photo'=>'Images\bobo.jpg','description'=>'BoBoiBoy is a Malaysian animated series and franchise produced by Animonsta Studios.','rating'=>8.8],
            ['genre_id'=>2,'title'=>'laskar pelangi','photo'=>'Images\pelangi.jpg','description'=>'Indonesian film adapted from the popular Laskar Pelangi (novel) by Andrea Hirata. The movie follows a group of 10 schoolchildren and their two inspirational teachers as they struggle with poverty and develop hopes for the future in Gantong Village on the farming and tin mining island of Belitung off the east coast of Sumatra.','rating'=>9.0],
            ['genre_id'=>1,'title'=>'desendants of the sun','photo'=>'Images\sun.jpg','description'=>'tells the story of a special forces captain (Song Joong Ki) and a doctor (Song Hye Kyo) who fall in love while providing aid in a country dealing with a natural disaster and civil strife.','rating'=>8.5],
            ['genre_id'=>2,'title'=>'running man','photo'=>'Images\run.jpg','description'=>'is a South Korean variety show, part of SBS Good Sunday lineup. This show is classified as a game-variety show, where the cast members and guests complete missions in a landmark to win a race.[1] Running Man first aired on July 11, 2010','rating'=>8.5],
            ['genre_id'=>2,'title'=>'jurasic park','photo'=>'Images\park.jpg','description'=>'A park employee attempts to steal dinosaur embryos, critical security systems are shut down and it now becomes a race for survival with dinosaurs roaming freely over the island.','rating'=>8.5],
            ['genre_id'=>1,'title'=>'its okay to not be okay','photo'=>'Images\oke.jpg','description'=>'Starring Kim Soo-hyun as Moon Gang-tae and Seo Ye-ji as Ko Moon-young, it tells the story of a romance between a caretaker at a psychiatric ward, who does not have time for love, and a successful childrens book author, who does not know the feeling of love.','rating'=>9.5],   
            ['genre_id'=>2,'title'=>'Black Mirror','photo'=>'Images\black.jpg','description'=>'Black Mirror is a British television anthology series created by Charlie Brooker that features speculative fiction with dark and sometimes satirical themes that examine modern society, particularly with regard to the unanticipated consequences of new technologies.','rating'=>8.5],
            ['genre_id'=>3,'title'=>'Doraemon','photo'=>'Images\doraemon.jpg','description'=>'Stand by Me Doraemon (STAND BY ME ドラえもん) is a 2014 Japanese 3D computer-animated science fiction comedy-drama film based on the Doraemon manga series and directed by Ryūichi Yagi and Takashi Yamazaki. It was released on 8 August 2014. It is the highest-grossing film of the Doraemon franchise.','rating'=>8.5],
            ['genre_id'=>3,'title'=>'Spongebob SquarePants','photo'=>'Images\spong.jpg','description'=>'Summaries. SpongeBob SquarePants takes leave from the town of Bikini Bottom in order to track down King Neptunes stolen crown. After King Neptunes crown is stolen, SpongeBob and Patrick go on a quest in 6 days to retrieve his crown.','rating'=>8.5],

            ]);
    }
}
