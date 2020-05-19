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
        DB::table('responses')->insert([
            ['responseID' => 1],
            ['responseID' => 2],
            ['responseID' => 3],
        ]);
    }
}
