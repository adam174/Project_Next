<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        factory(App\User::class, 250)->create();
        factory(App\Models\Reservation::class, 350)->create();



        $this->call(TranslationsTableSeeder::class);
    }
}
