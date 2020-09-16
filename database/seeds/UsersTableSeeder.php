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
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'mobile' => '06666666',
                'country' => 37,
                'password' => '$2y$12$FZm8yhV61cSMN8IXSfs9eOrZ/xDKsASahgdLve5108vZp8PS2g4oy', //password
                'remember_token' => NULL,
                'created_at' => '2020-04-28 17:47:12',
                'updated_at' => '2020-04-28 17:47:12',
            ),

        ));


    }
}
