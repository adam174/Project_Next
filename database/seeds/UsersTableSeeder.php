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
                'mobile' => '',
                'country' => '',
                'password' => '$2y$10$YQPWfR9j6iFHZbIg8KqiL.nJH3qqZpK2IkOcXQbMRUpIN82gDLrVe',
                'remember_token' => NULL,
                'created_at' => '2020-04-28 17:47:12',
                'updated_at' => '2020-04-28 17:47:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'adam',
                'email' => 'abdel@mhanni.dev',
                'email_verified_at' => NULL,
                'mobile' => '',
                'country' => '',
                'password' => '$2y$10$eihaT83EDoubuBIUKdJ88uMnbNL6rv3A9SzA1FcxHedPxhPB7RqF.',
                'remember_token' => NULL,
                'created_at' => '2020-04-29 07:42:21',
                'updated_at' => '2020-04-29 07:42:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'fati',
                'email' => 'fati@mhanni.dev',
                'email_verified_at' => NULL,
                'mobile' => '',
                'country' => '',
                'password' => '$2y$10$qLJHF7VaqCwpB10wE0Qk0e0nzRAK1jpmtctSNFXCS.3mDLa/0441G',
                'remember_token' => NULL,
                'created_at' => '2020-05-22 09:36:10',
                'updated_at' => '2020-05-22 09:36:10',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'desk',
                'email' => 'foo2@live.fr',
                'email_verified_at' => NULL,
                'mobile' => '',
                'country' => '',
                'password' => '$2y$10$Xm98Qffml8YU/gZL002yLuevXYfBCHKarG4AtgqWSHoHJ0Bqic3y2',
                'remember_token' => NULL,
                'created_at' => '2020-05-23 14:02:26',
                'updated_at' => '2020-05-23 14:02:26',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'adam174',
                'email' => 'abdel@abdel.fr',
                'email_verified_at' => NULL,
                'mobile' => '06225544',
                'country' => 'france',
                'password' => '$2y$10$Ho.MWKjB1mcRW4HUXn46hu4vEt0M2L0H1WM.Jv/Zes84Hf8EWjyHW',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'ddgd',
                'email' => 'dgdsgd@libr.gg',
                'email_verified_at' => NULL,
                'mobile' => 'sdgds',
                'country' => 'dgd',
                'password' => '$2y$10$g6DCQ01SqCQ9rBG99.DG6.wHU6nrJ6bQ5aqJKHbmdBtaphKSRyxF.',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'ruth',
                'email' => 'ruth@gmail.com',
                'email_verified_at' => NULL,
                'mobile' => '0760171435',
                'country' => 'france',
                'password' => '$2y$10$PP.yWbCAsXg1apoEwwf0geFhNYlBwUQrsOLvLi7KxsRBMjU/m2Rru',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'ghfh',
                'email' => 'ghgfhgf@live.fr',
                'email_verified_at' => NULL,
                'mobile' => 'fgghf',
                'country' => 'gfhgfhgf',
                'password' => '$2y$10$oz4DgwzS5sYeFEQh8.YnUeetfUmEvkfuTdA3jdZxIECaATFi253BG',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'sqfqsf',
                'email' => 'ruth77@nachattube.com',
                'email_verified_at' => NULL,
                'mobile' => 'sfqfffssq',
                'country' => 'qsfs',
                'password' => '$2y$10$Vddavb1vrNKbn8MqCP0Squv9YkaeVYPIN9iVFxXhoAdkeVWztTpr2',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'gdg',
                'email' => 'ruth787@nachattube.com',
                'email_verified_at' => NULL,
                'mobile' => 'dsssdg',
                'country' => 'dgdsg',
                'password' => '$2y$10$IZfkH1OvMTuw5itQtVTOOOu2DSkNQ/jjLBDbyILQkmbrs/4y5t9.i',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'hfdhfd',
                'email' => 'fdhfdhdf@live.fr',
                'email_verified_at' => NULL,
                'mobile' => 'dfhfd',
                'country' => 'dfhfdh',
                'password' => '$2y$10$ljRxSNkF/RIs2Wf6M8vuC.YWUKG8naO2eewo1joAdZdG8B.N0YOKG',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'xvvd',
                'email' => 'dgdsgd@live.fr',
                'email_verified_at' => NULL,
                'mobile' => 'dsdsg',
                'country' => 'dsgdsg',
                'password' => '$2y$10$jfCRHwaoVgLjD.rVhjxC8elr0RxToCRlUsSidZnHJ6jPMJoHlgHCq',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'fgfg',
                'email' => 'lolo@live.fr',
                'email_verified_at' => NULL,
                'mobile' => 'fgfg',
                'country' => 'fgfg.f',
                'password' => '$2y$10$XgR4X4vD4fWjGzVg/hld..YfVS2WPAeZSQhZbJpCIjKbPFN1XefES',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'adam mh',
                'email' => 'ruth@live.fr',
                'email_verified_at' => NULL,
                'mobile' => '0776655445',
                'country' => 'France',
                'password' => '$2y$10$tAgDYo4aGkNprmNzaNPPf.LvESvdgk6mHw5aKOYTwapbqendgM05O',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}