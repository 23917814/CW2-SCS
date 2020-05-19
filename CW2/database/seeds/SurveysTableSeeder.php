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
        /** Assign data to their respective variables 
         * set in rows - for example, the first row's 
         * data is 1, Programming Languages, A study to research the most 
         * known programming languages, and true.
         */
        DB::table('surveys')->insert([
            ['surveyid' => 1, 'title'=> "Programming Languages", 'description' => "A study to research the most known programming languages.", 'liveStatus' => true],
            ['surveyid' => 2, 'title'=> "Games Consoles", 'description' => "A study to research the most popular gaming consoles.", 'liveStatus' => true],
            ['surveyid' => 3, 'title'=> "Fruits", 'description' => "A study to research the most popular fruit.", 'liveStatus' => true],
        ]);
    }
}
