<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilmGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data film-genre
        $filmGenres = [
            ['film_id' => 1, 'genre_id' => 1, 'created_at' => Carbon::now()],
            ['film_id' => 1, 'genre_id' => 2, 'created_at' => Carbon::now()],
            ['film_id' => 2, 'genre_id' => 1, 'created_at' => Carbon::now()],
            ['film_id' => 2, 'genre_id' => 3, 'created_at' => Carbon::now()],
            ['film_id' => 3, 'genre_id' => 1, 'created_at' => Carbon::now()],
            ['film_id' => 3, 'genre_id' => 4, 'created_at' => Carbon::now()],
            ['film_id' => 4, 'genre_id' => 1, 'created_at' => Carbon::now()],
            ['film_id' => 4, 'genre_id' => 2, 'created_at' => Carbon::now()],
            ['film_id' => 5, 'genre_id' => 1, 'created_at' => Carbon::now()],
            ['film_id' => 6, 'genre_id' => 1, 'created_at' => Carbon::now()],
            ['film_id' => 7, 'genre_id' => 5, 'created_at' => Carbon::now()],
            ['film_id' => 8, 'genre_id' => 5, 'created_at' => Carbon::now()],
            ['film_id' => 9, 'genre_id' => 5, 'created_at' => Carbon::now()],
            ['film_id' => 10, 'genre_id' => 6, 'created_at' => Carbon::now()],
        ];

        // Masukkan data ke dalam database
        foreach ($filmGenres as $filmGenre) {
            DB::table('film_genres')->insert($filmGenre);
        }
    }
}
