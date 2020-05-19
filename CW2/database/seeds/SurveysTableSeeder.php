<?php

use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->insert([
            ['surveyid' => 1, 'title'=> "Programming Languages", 'description' => "A study to research the most known programming languages.", 'liveStatus' => true],
            ['surveyid' => 2, 'title'=> "Games Consoles", 'description' => "A study to research the most popular gaming consoles.", 'liveStatus' => true],
            ['surveyid' => 3, 'title'=> "Fruits", 'description' => "A study to research the most popular fruit.", 'liveStatus' => true],
        ]);
    }
}
