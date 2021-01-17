<?php

use Illuminate\Database\Seeder;

class body_partsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('body_parts')->insert([
            'id' => '1',
            'trainingtypes_id' => '1',
            'training_parts' => 'Chest'
        ]);
        
        DB::table('body_parts')->insert([
            'id' => '2',
            'trainingtypes_id' => '1',
            'training_parts' => 'Arm'
        ]);
        
        DB::table('body_parts')->insert([
            'id' => '3',
            'trainingtypes_id' => '1',
            'training_parts' => 'Back'
        ]);
        
        DB::table('body_parts')->insert([
            'id' => '4',
            'trainingtypes_id' => '1',
            'training_parts' => 'Shoulder'
        ]);
        
        DB::table('body_parts')->insert([
            'id' => '5',
            'trainingtypes_id' => '1',
            'training_parts' => 'Foot'
        ]);
        
        DB::table('body_parts')->insert([
            'id' => '6',
            'trainingtypes_id' => '2',
            'training_parts' => 'Full body'
        ]);
        
        
        
        
        
    }
}
