<?php

use Illuminate\Database\Seeder;

class ResponsesTableSeeder extends Seeder
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
         * data is 1.
         */
        DB::table('responses')->insert([
            ['responseID' => 1],
            ['responseID' => 2],
            ['responseID' => 3],
        ]);
    }
}
