<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
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
         * data is 1, and PHP.
         */
        DB::table('answers')->insert([
            ['answerID' => 1, 'text' => "PHP"],
            ['answerID' => 2, 'text' => "JavaScript"],
            ['answerID' => 3, 'text' => "HTML"],
            ['answerID' => 4, 'text' => "Yes"],
            ['answerID' => 5, 'text' => "No"],
        ]);
    }
}
