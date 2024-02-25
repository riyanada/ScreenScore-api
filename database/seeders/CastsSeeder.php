<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data casts
        $casts = [
            ['name' => 'Robert Downey Jr.', 'age' => 56, 'date_of_birth' => '1965-04-04', 'place_of_birth' => 'Manhattan, New York City, New York, USA', 'bio' => 'Robert John Downey Jr. (born April 4, 1965) is an American actor, producer, and singer. His career has been characterized by critical and popular success in his youth, followed by a period of substance abuse and legal troubles, before a resurgence of commercial success in middle age.', 'created_at' => Carbon::now()],
            ['name' => 'Chris Evans', 'age' => 40, 'date_of_birth' => '1981-06-13', 'place_of_birth' => 'Boston, Massachusetts, USA', 'bio' => 'Christopher Robert Evans (born June 13, 1981) is an American actor. He first gained attention in 2005 as the Marvel Comics character Human Torch in Fantastic Four (2005) and its 2007 sequel and later gained further worldwide attention for his portrayal of Steve Rogers / Captain America in the Marvel Cinematic Universe, appearing in eleven films including four cameos.', 'created_at' => Carbon::now()],
            ['name' => 'Scarlett Johansson', 'age' => 37, 'date_of_birth' => '1984-11-22', 'place_of_birth' => 'New York City, New York, USA', 'bio' => 'Scarlett Ingrid Johansson (born November 22, 1984) is an American actress and singer. She was the world\'s highest-paid actress in 2018 and 2019, and has featured multiple times on the Forbes Celebrity 100 list.', 'created_at' => Carbon::now()],
            ['name' => 'Mark Ruffalo', 'age' => 54, 'date_of_birth' => '1967-11-22', 'place_of_birth' => 'Kenosha, Wisconsin, USA', 'bio' => 'Mark Alan Ruffalo (born November 22, 1967) is an American actor and producer. He gained international recognition for his role as Bruce Banner / Hulk in the Marvel Cinematic Universe superhero films.', 'created_at' => Carbon::now()],
            ['name' => 'Chris Hemsworth', 'age' => 38, 'date_of_birth' => '1983-08-11', 'place_of_birth' => 'Melbourne, Victoria, Australia', 'bio' => 'Christopher Hemsworth (born 11 August 1983) is an Australian actor. He first rose to prominence in Australia playing Kim Hyde in the Australian television series Home and Away (2004–2007) before beginning a film career in Hollywood.', 'created_at' => Carbon::now()],
            ['name' => 'Tom Hiddleston', 'age' => 41, 'date_of_birth' => '1981-02-09', 'place_of_birth' => 'Westminster, London, England, UK', 'bio' => 'Thomas William Hiddleston (born 9 February 1981) is an English actor. He is the recipient of several accolades, including a Golden Globe Award and a Laurence Olivier Award, in addition to nominations for two Primetime Emmy Awards and a Tony Award.', 'created_at' => Carbon::now()],
            ['name' => 'Jeremy Renner', 'age' => 51, 'date_of_birth' => '1971-01-07', 'place_of_birth' => 'Modesto, California, USA', 'bio' => 'Jeremy Lee Renner (born January 7, 1971) is an American actor and musician. He is best known for his roles in action films and superhero films.', 'created_at' => Carbon::now()],
            ['name' => 'Paul Rudd', 'age' => 53, 'date_of_birth' => '1969-04-06', 'place_of_birth' => 'Passaic, New Jersey, USA', 'bio' => 'Paul Stephen Rudd (born April 6, 1969) is an American actor and film producer. He has received numerous awards and nominations, including a Critics\' Choice Television Award, a Primetime Emmy Award, and nominations for two British Academy Film Awards and a Screen Actors Guild Award.', 'created_at' => Carbon::now()],
            ['name' => 'Brie Larson', 'age' => 32, 'date_of_birth' => '1989-10-01', 'place_of_birth' => 'Sacramento, California, USA', 'bio' => 'Brianne Sidonie Desaulniers (born October 1, 1989), known professionally as Brie Larson, is an American actress and filmmaker. Noted for her supporting work in comedies when a teenager, she has since expanded to leading roles in independent dramas and film franchises, receiving such accolades as an Academy Award and a Golden Globe.', 'created_at' => Carbon::now()],
            ['name' => 'Tom Holland', 'age' => 25, 'date_of_birth' => '1996-06-01', 'place_of_birth' => 'Kingston upon Thames, London, England, UK', 'bio' => 'Thomas Stanley Holland (born 1 June 1996) is an English actor. He first gained recognition for his starring role in the disaster film The Impossible (2012).', 'created_at' => Carbon::now()],
            ['name' => 'Leonardo DiCaprio', 'age' => 47, 'date_of_birth' => '1974-11-11', 'place_of_birth' => 'Los Angeles, California, USA', 'bio' => 'Leonardo Wilhelm DiCaprio is an American actor, film producer, and environmentalist. He has often played unconventional roles, particularly in biopics and period films. As of 2019, his films have grossed over $7.2 billion worldwide, and he has been placed eight times in annual rankings of the world\'s highest-paid actors.', 'created_at' => Carbon::now()],
            ['name' => 'Brad Pitt', 'age' => 58, 'date_of_birth' => '1963-12-18', 'place_of_birth' => 'Shawnee, Oklahoma, USA', 'bio' => 'William Bradley Pitt is an American actor and film producer. He has received multiple awards, including two Golden Globe Awards and an Academy Award for his acting, in addition to another Academy Award, another Golden Globe Award and a Primetime Emmy Award as producer under his production company, Plan B Entertainment.', 'created_at' => Carbon::now()],
            ['name' => 'Hugh Jackman', 'age' => 53, 'date_of_birth' => '1968-10-12', 'place_of_birth' => 'Sydney, New South Wales, Australia', 'bio' => 'Hugh Michael Jackman is an Australian actor, singer, and producer. He is best known for playing Wolverine in the X-Men film series from 2000 to 2018, a role for which he holds the Guinness World Record for "longest career as a live-action Marvel superhero".', 'created_at' => Carbon::now()],
            ['name' => 'Patrick Stewart', 'age' => 81, 'date_of_birth' => '1940-07-13', 'place_of_birth' => 'Mirfield, Yorkshire, England', 'bio' => 'Sir Patrick Stewart OBE is an English actor. He is one of the most recognizable and respected actors in the world. He has been nominated for Olivier, Golden Globe, Emmy, Screen Actors Guild, and Saturn Awards.', 'created_at' => Carbon::now()],
            ['name' => 'Christian Bale', 'age' => 48, 'date_of_birth' => '1974-01-30', 'place_of_birth' => 'Haverfordwest, Pembrokeshire, Wales', 'bio' => 'Christian Charles Philip Bale is an English actor. Known for his versatility and intense acting style, he has appeared in a wide range of film genres. Bale is the recipient of many awards, including an Academy Award and two Golden Globe Awards.', 'created_at' => Carbon::now()],
            ['name' => 'Heath Ledger', 'age' => 28, 'date_of_birth' => '1979-04-04', 'place_of_birth' => 'Perth, Western Australia, Australia', 'bio' => 'Heath Andrew Ledger was an Australian actor, photographer, and music video director. He was known for his intense performances in films, his distinctive looks, and his charisma.', 'created_at' => Carbon::now()],
            ['name' => 'Johnny Depp', 'age' => 58, 'date_of_birth' => '1963-06-09', 'place_of_birth' => 'Owensboro, Kentucky, USA', 'bio' => 'John Christopher Depp II is an American actor, producer, and musician. He is regarded as one of the most notable film stars. He has been nominated for ten Golden Globe Awards, winning one for Best Actor for his performance of the title role in Sweeney Todd: The Demon Barber of Fleet Street (2007), and has been nominated for three Academy Awards for Best Actor, among other accolades.', 'created_at' => Carbon::now()],
            ['name' => 'Orlando Bloom', 'age' => 45, 'date_of_birth' => '1977-01-13', 'place_of_birth' => 'Canterbury, Kent, England, UK', 'bio' => 'Orlando Jonathan Blanchard Copeland Bloom is an English actor. He made his breakthrough as the character Legolas in The Lord of the Rings film series, a role he reprised in The Hobbit film series.', 'created_at' => Carbon::now()],
            ['name' => 'Emma Stone', 'age' => 33, 'date_of_birth' => '1988-11-06', 'place_of_birth' => 'Scottsdale, Arizona, USA', 'bio' => 'Emily Jean Stone is an American actress. She is the recipient of various accolades, including an Academy Award, a British Academy Film Award, and a Golden Globe Award.', 'created_at' => Carbon::now()],
            ['name' => 'Ryan Gosling', 'age' => 41, 'date_of_birth' => '1980-11-12', 'place_of_birth' => 'London, Ontario, Canada', 'bio' => 'Ryan Thomas Gosling is a Canadian actor and musician. He began his career as a child star on the Disney Channel\'s The Mickey Mouse Club (1993–1995), and went on to appear in other family entertainment programs, including Are You Afraid of the Dark? (1995) and Goosebumps (1996).', 'created_at' => Carbon::now()],
            ['name' => 'Anne Hathaway', 'age' => 39, 'date_of_birth' => '1982-11-12', 'place_of_birth' => 'Brooklyn, New York, USA', 'bio' => 'Anne Jacqueline Hathaway is an American actress. She is the recipient of various accolades, including an Academy Award, a Primetime Emmy Award, and a Golden Globe Award.', 'created_at' => Carbon::now()],
            ['name' => 'Sandra Bullock', 'age' => 57, 'date_of_birth' => '1964-07-26', 'place_of_birth' => 'Arlington, Virginia, USA', 'bio' => 'Sandra Annette Bullock is an American actress and producer. She is the recipient of various accolades, including an Academy Award, a Golden Globe Award, two Critics\' Choice Movie Awards, and two Screen Actors Guild Awards.', 'created_at' => Carbon::now()],
            ['name' => 'Tom Hanks', 'age' => 65, 'date_of_birth' => '1956-07-09', 'place_of_birth' => 'Concord, California, USA', 'bio' => 'Thomas Jeffrey Hanks is an American actor and filmmaker. Known for both his comedic and dramatic roles, he is one of the most popular and recognizable film stars worldwide, and is regarded as an American cultural icon.', 'created_at' => Carbon::now()],
            ['name' => 'Matt Damon', 'age' => 51, 'date_of_birth' => '1970-10-08', 'place_of_birth' => 'Cambridge, Massachusetts, USA', 'bio' => 'Matthew Paige Damon is an American actor, producer, and screenwriter. Ranked among Forbes magazine\'s most bankable stars, the films in which he has appeared have collectively earned over $3.88 billion at the North American box office, making him one of the highest-grossing actors of all time.', 'created_at' => Carbon::now()],
            ['name' => 'Chris Evans', 'age' => 41, 'date_of_birth' => '1981-06-13', 'place_of_birth' => 'Boston, Massachusetts, USA', 'bio' => 'Christopher Robert Evans is an American actor. He first gained attention in 2005 as the Marvel Comics character Human Torch in Fantastic Four (2005) and its 2007 sequel and later gained further worldwide attention for his portrayal of Steve Rogers / Captain America in the Marvel Cinematic Universe, appearing in eleven films including four cameos.', 'created_at' => Carbon::now()],
            ['name' => 'Scarlett Johansson', 'age' => 37, 'date_of_birth' => '1984-11-22', 'place_of_birth' => 'New York City, New York, USA', 'bio' => 'Scarlett Ingrid Johansson is an American actress and singer. She is the world\'s highest-paid actress, has made multiple appearances in the Forbes Celebrity 100, and has a star on the Hollywood Walk of Fame.', 'created_at' => Carbon::now()],
            ['name' => 'Robert Downey Jr.', 'age' => 56, 'date_of_birth' => '1965-04-04', 'place_of_birth' => 'Manhattan, New York City, New York, USA', 'bio' => 'Robert John Downey Jr. is an American actor and producer. His career has been characterized by critical and popular success in his youth, followed by a period of substance abuse and legal troubles, before a resurgence of commercial success in middle age.', 'created_at' => Carbon::now()],
            ['name' => 'Chris Hemsworth', 'age' => 38, 'date_of_birth' => '1983-08-11', 'place_of_birth' => 'Melbourne, Victoria, Australia', 'bio' => 'Christopher Hemsworth is an Australian actor. He rose to prominence playing Kim Hyde in the Australian television series Home and Away (2004–2007) before beginning a film career in Hollywood.', 'created_at' => Carbon::now()],
            ['name' => 'Mark Ruffalo', 'age' => 54, 'date_of_birth' => '1967-11-22', 'place_of_birth' => 'Kenosha, Wisconsin, USA', 'bio' => 'Mark Alan Ruffalo is an American actor and producer. He began acting in the early 1990s and gained recognition for his work in Kenneth Lonergan\'s play This Is Our Youth (1996) and drama film You Can Count On Me (2000).', 'created_at' => Carbon::now()],
            ['name' => 'Jeremy Renner', 'age' => 51, 'date_of_birth' => '1971-01-07', 'place_of_birth' => 'Modesto, California, USA', 'bio' => 'Jeremy Lee Renner is an American actor. He began his career by appearing in independent films such as Dahmer (2002) and Neo Ned (2005).']
        ];

        // Masukkan data ke dalam database
        foreach ($casts as $cast) {
            DB::table('casts')->insert($cast);
        }
    }
}
