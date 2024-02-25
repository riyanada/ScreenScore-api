<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CharactersSeeder extends Seeder
{
    public function run()
    {
        $characters = [
            ['film_id' => 1, 'cast_id' => 1, 'name' => 'Joseph "Coop" Cooper', 'created_at' => Carbon::now()],
            ['film_id' => 1, 'cast_id' => 2, 'name' => 'Dr. Amelia Brand', 'created_at' => Carbon::now()],
            ['film_id' => 2, 'cast_id' => 3, 'name' => 'Paul Atreides', 'created_at' => Carbon::now()],
            ['film_id' => 2, 'cast_id' => 4, 'name' => 'Lady Jessica', 'created_at' => Carbon::now()],
            ['film_id' => 3, 'cast_id' => 5, 'name' => 'The Protagonist', 'created_at' => Carbon::now()],
            ['film_id' => 3, 'cast_id' => 6, 'name' => 'Neil', 'created_at' => Carbon::now()],
            ['film_id' => 4, 'cast_id' => 7, 'name' => 'Tony Stark / Iron Man', 'created_at' => Carbon::now()],
            ['film_id' => 4, 'cast_id' => 8, 'name' => 'Steve Rogers / Captain America', 'created_at' => Carbon::now()],
            ['film_id' => 5, 'cast_id' => 9, 'name' => 'Cobb', 'created_at' => Carbon::now()],
            ['film_id' => 5, 'cast_id' => 10, 'name' => 'Ariadne', 'created_at' => Carbon::now()],
            ['film_id' => 6, 'cast_id' => 11, 'name' => 'Bruce Wayne / Batman', 'created_at' => Carbon::now()],
            ['film_id' => 6, 'cast_id' => 12, 'name' => 'Joker', 'created_at' => Carbon::now()],
            ['film_id' => 7, 'cast_id' => 13, 'name' => 'Andy Dufresne', 'created_at' => Carbon::now()],
            ['film_id' => 7, 'cast_id' => 14, 'name' => 'Ellis Boyd "Red" Redding', 'created_at' => Carbon::now()],
            ['film_id' => 8, 'cast_id' => 15, 'name' => 'Don Vito Corleone', 'created_at' => Carbon::now()],
            ['film_id' => 8, 'cast_id' => 16, 'name' => 'Michael Corleone', 'created_at' => Carbon::now()],
            ['film_id' => 9, 'cast_id' => 17, 'name' => 'Vincent Vega', 'created_at' => Carbon::now()],
            ['film_id' => 9, 'cast_id' => 18, 'name' => 'Jules Winnfield', 'created_at' => Carbon::now()],
            ['film_id' => 10, 'cast_id' => 19, 'name' => 'Aragorn', 'created_at' => Carbon::now()],
            ['film_id' => 10, 'cast_id' => 20, 'name' => 'Frodo Baggins', 'created_at' => Carbon::now()],
            ['film_id' => 11, 'cast_id' => 21, 'name' => 'Neo', 'created_at' => Carbon::now()],
            ['film_id' => 11, 'cast_id' => 22, 'name' => 'Morpheus', 'created_at' => Carbon::now()],
        ];

        foreach ($characters as $character) {
            DB::table('characters')->insert($character);
        }
    }
}
