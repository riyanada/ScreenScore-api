<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(FilmsSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(FilmGenresSeeder::class);
        $this->call(CastsSeeder::class);
        $this->call(CharactersSeeder::class);
    }
}
