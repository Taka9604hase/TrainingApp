<?php

use Illuminate\Database\Seeder;

class training_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_types')->insert([
            'id' => '1',
            'training_type' => 'weight training'
        ]);
        DB::table('training_types')->insert([
            'id' => '2',
            'training_type' => 'aerobic training'
        ]);
    }
}
