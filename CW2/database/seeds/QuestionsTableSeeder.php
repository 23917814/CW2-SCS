<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
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
         * data is 1, and Which of these do you know?
         */
        DB::table('questions')->insert([
            ['questionID' => 1, 'text' => "Which of these do you know?"],
            ['questionID' => 2, 'text' => "Do you own an Xbox One?"],
            ['questionID' => 3, 'text' => "Do you own a PS4?"],
            ['questionID' => 4, 'text' => "Which do you prefer?"],
        ]);
    }
}
