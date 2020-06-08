<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hotels')->delete();
        
        \DB::table('hotels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Royal Hotel',
                'location' => 'Paris, France',
                'description' => 'Royal luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch',
            ),
        ));
        
        
    }
}