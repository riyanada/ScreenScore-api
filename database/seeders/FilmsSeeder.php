<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data film
        $films = [
            [
                'judul' => 'Interstellar',
                'director' => 'Christopher Nolan',
                'ringkasan' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'tahun' => 2014,
                'poster' => 'interstellar_poster.jpg',
                'avg_ratings' => 4.8,
                'user_id' => 1,
                'created_at' => Carbon::now(),

            ],
            [
                'judul' => 'Dune',
                'director' => 'Denis Villeneuve',
                'ringkasan' => 'Feature adaptation of Frank Herbert\'s science fiction novel, about the son of a noble family entrusted with the protection of the most valuable asset and most vital element in the galaxy.',
                'tahun' => 2021,
                'poster' => 'dune_poster.jpg',
                'avg_ratings' => 4.7,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'Tenet',
                'director' => 'Christopher Nolan',
                'ringkasan' => 'Armed with only one word -- Tenet -- and fighting for the survival of the entire world, the Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.',
                'tahun' => 2020,
                'poster' => 'tenet_poster.jpg',
                'avg_ratings' => 4.6,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'Avengers: Endgame',
                'director' => 'Anthony Russo, Joe Russo',
                'ringkasan' => 'After the devastating events of Avengers: Infinity War, the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.',
                'tahun' => 2019,
                'poster' => 'avengers_endgame_poster.jpg',
                'avg_ratings' => 4.9,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'Inception',
                'director' => 'Christopher Nolan',
                'ringkasan' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'tahun' => 2010,
                'poster' => 'inception_poster.jpg',
                'avg_ratings' => 4.7,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'ringkasan' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'tahun' => 2008,
                'poster' => 'dark_knight_poster.jpg',
                'avg_ratings' => 4.9,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'The Shawshank Redemption',
                'director' => 'Frank Darabont',
                'ringkasan' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'tahun' => 1994,
                'poster' => 'shawshank_redemption_poster.jpg',
                'avg_ratings' => 4.9,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'ringkasan' => 'An organized crime dynasty\'s aging patriarch transfers control of his clandestine empire to his reluctant son.',
                'tahun' => 1972,
                'poster' => 'godfather_poster.jpg',
                'avg_ratings' => 4.8,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'ringkasan' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'tahun' => 1994,
                'poster' => 'pulp_fiction_poster.jpg',
                'avg_ratings' => 4.7,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'The Lord of the Rings: The Return of the King',
                'director' => 'Peter Jackson',
                'ringkasan' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'tahun' => 2003,
                'poster' => 'lord_of_the_rings_return_of_the_king_poster.jpg',
                'avg_ratings' => 4.9,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'judul' => 'The Matrix',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'ringkasan' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'tahun' => 1999,
                'poster' => 'matrix_poster.jpg',
                'avg_ratings' => 4.7,
                'user_id' => 1,
                'created_at' => Carbon::now(),
            ],
        ];

        // Masukkan data ke dalam database
        foreach ($films as $film) {
            DB::table('films')->insert($film);
        }
    }
}
