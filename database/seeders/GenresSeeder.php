<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data genre film
        $genres = [
            ['name' => 'Action', 'created_at' => Carbon::now()],
            ['name' => 'Comedy', 'created_at' => Carbon::now()],
            ['name' => 'Drama', 'created_at' => Carbon::now()],
            ['name' => 'Horror', 'created_at' => Carbon::now()],
            ['name' => 'Science Fiction', 'created_at' => Carbon::now()],
            ['name' => 'Romance', 'created_at' => Carbon::now()],
            ['name' => 'Thriller', 'created_at' => Carbon::now()],
            ['name' => 'Adventure', 'created_at' => Carbon::now()],
            ['name' => 'Fantasy', 'created_at' => Carbon::now()],
            ['name' => 'Mystery', 'created_at' => Carbon::now()],
            ['name' => 'Crime', 'created_at' => Carbon::now()],
            ['name' => 'Animation', 'created_at' => Carbon::now()],
            ['name' => 'Family', 'created_at' => Carbon::now()],
            ['name' => 'Documentary', 'created_at' => Carbon::now()],
            ['name' => 'Biography', 'created_at' => Carbon::now()],
            ['name' => 'History', 'created_at' => Carbon::now()],
            ['name' => 'War', 'created_at' => Carbon::now()],
            ['name' => 'Music', 'created_at' => Carbon::now()],
            ['name' => 'Fantasy', 'created_at' => Carbon::now()],
            ['name' => 'Western', 'created_at' => Carbon::now()],
            ['name' => 'Film Noir', 'created_at' => Carbon::now()],
            ['name' => 'Superhero', 'created_at' => Carbon::now()],
            ['name' => 'Mockumentary', 'created_at' => Carbon::now()],
            ['name' => 'Surrealism', 'created_at' => Carbon::now()],
            ['name' => 'Slasher', 'created_at' => Carbon::now()],
            ['name' => 'Psychological Thriller', 'created_at' => Carbon::now()],
            ['name' => 'Coming of Age', 'created_at' => Carbon::now()],
            ['name' => 'Neo-Noir', 'created_at' => Carbon::now()],
            ['name' => 'Courtroom Drama', 'created_at' => Carbon::now()],
            ['name' => 'Political Drama', 'created_at' => Carbon::now()],
            ['name' => 'Romantic Comedy', 'created_at' => Carbon::now()],
            ['name' => 'Satire', 'created_at' => Carbon::now()],
            ['name' => 'Silent Film', 'created_at' => Carbon::now()],
            ['name' => 'Historical Fiction', 'created_at' => Carbon::now()],
            ['name' => 'Zombie', 'created_at' => Carbon::now()],
            ['name' => 'Survival', 'created_at' => Carbon::now()],
            ['name' => 'Heist', 'created_at' => Carbon::now()],
            ['name' => 'Alien Invasion', 'created_at' => Carbon::now()],
            ['name' => 'Cyberpunk', 'created_at' => Carbon::now()],
            ['name' => 'Time Travel', 'created_at' => Carbon::now()],
            ['name' => 'Post-Apocalyptic', 'created_at' => Carbon::now()],
            ['name' => 'Neo-Western', 'created_at' => Carbon::now()],
            ['name' => 'Musical', 'created_at' => Carbon::now()],
            ['name' => 'Historical Epic', 'created_at' => Carbon::now()],
            ['name' => 'Erotic Thriller', 'created_at' => Carbon::now()],
            ['name' => 'Biographical Film', 'created_at' => Carbon::now()],
            ['name' => 'Teen Movie', 'created_at' => Carbon::now()],
            ['name' => 'Fairy Tale', 'created_at' => Carbon::now()],
            ['name' => 'Gangster', 'created_at' => Carbon::now()],
            ['name' => 'Vampire', 'created_at' => Carbon::now()],
            ['name' => 'Sword and Sorcery', 'created_at' => Carbon::now()],
            ['name' => 'Conspiracy Thriller', 'created_at' => Carbon::now()],
            ['name' => 'Psychological Horror', 'created_at' => Carbon::now()],
            ['name' => 'Detective', 'created_at' => Carbon::now()],
            ['name' => 'Epic', 'created_at' => Carbon::now()],
            ['name' => 'Buddy Film', 'created_at' => Carbon::now()],
            ['name' => 'Disaster', 'created_at' => Carbon::now()],
            ['name' => 'Apocalyptic and Post-Apocalyptic Fiction', 'created_at' => Carbon::now()],
            ['name' => 'Prison', 'created_at' => Carbon::now()],
            ['name' => 'Neo-Victorian', 'created_at' => Carbon::now()],
            ['name' => 'Social Issues', 'created_at' => Carbon::now()],
            ['name' => 'Creature Feature', 'created_at' => Carbon::now()],
            ['name' => 'Urban Fantasy', 'created_at' => Carbon::now()],
            ['name' => 'Erotic Drama', 'created_at' => Carbon::now()],
        ];

        // Memasukkan data genre ke dalam tabel
        foreach ($genres as $genre) {
            DB::table('genres')->insert($genre);
        }
    }
}
