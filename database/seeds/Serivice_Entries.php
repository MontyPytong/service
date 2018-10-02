<?php

use Illuminate\Database\Seeder;

class Serivice_Entries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_entries')->insert([
            'nume' => str_random(10),
            'produs' => str_random(10),
            'sn' => str_random(10),
            'defect' => str_random(10),
            
            
        ]);
    }
}
