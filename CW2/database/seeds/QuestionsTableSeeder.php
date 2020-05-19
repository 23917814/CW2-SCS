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
        DB::table('questions')->insert([
            ['questionID' => 1, 'text' => "Which of these do you know?"],
            ['questionID' => 2, 'text' => "Do you own an Xbox One?"],
            ['questionID' => 3, 'text' => "Do you own a PS4?"],
            ['questionID' => 4, 'text' => "Which do you prefer?"],
        ]);
    }
}
