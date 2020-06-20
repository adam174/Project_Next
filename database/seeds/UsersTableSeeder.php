<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ruth',
                'email' => 'ruth@nachattube.com',
                'email_verified_at' => NULL,
                'mobile' => '06666666',
                'country' => 37,
                'password' => '$2y$10$YQPWfR9j6iFHZbIg8KqiL.nJH3qqZpK2IkOcXQbMRUpIN82gDLrVe',
                'remember_token' => NULL,
                'created_at' => '2020-04-28 17:47:12',
                'updated_at' => '2020-04-28 17:47:12',
            ),

        ));
        
        
    }
}