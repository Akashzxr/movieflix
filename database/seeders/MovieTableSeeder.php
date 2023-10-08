<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
            'movie_name'=> "The Batman",
            'genres' => json_encode([1,5]),
            'director' => "Matt Reeves",
            'producers' => "Warner Bros,DC Entertainment,6th & Idaho Productions",
            'writters' => "Matt Reeves,Peter Craig,Bob Kane",
            'actors' => "Robert Pattinson,Zoë Kravitz,Jeffrey Wright,Colin Farrell,Paul Dano",
            'description' => "Two years of nights have turned Bruce Wayne into a nocturnal animal. But as he continues to find his way as Gotham's dark knight Bruce is forced into a game of cat and mouse with his biggest threat so far, a manic killer known as The Riddler who is filled with rage and determined to expose the corrupt system whilst picking off all of Gotham's key political figures. Working with both established and new allies, Bruce must track down the killer and see him brought to justice, while investigating his father's true legacy and questioning the effect that he has had on Gotham so far as The Batman.",
            'movie_image' => "images/thebatman.jpg",	
            'trailer_link' => "https://imdb-video.media-imdb.com/vi3196175129/1434659607842-pgv4ql-1634416886363.mp4?Expires=1696755039&Signature=VDHq8CnqoQjYkC7gHPSdJEmNBlRUs6WinYw~4TGktDHj0lS1f5yQ0~o1lHZW7jxXKtvM8z9jrwDi~oHIydzDqjN4CYCYZlTiFIHLqm9Q4620ndMNevLgJZJfO53~a0PEbZSSkKZbqavwLizpZieZTfTJ3~d24LDKdES4mtI1AOtezyIMU4OOZ2HwyYJrnt-wLTtAiEal-OWXtMzSDXSE1gPJ2O-w226JtwOWumLWfOddM872BOl-wt-6lWzBiiS8E9IMOKjF4b7Rsh0We3~9rXXCIuRNs2iDVVOJEUuO7eBnMyRHmvtsl3YM-py~RCJu5oMZW4Ikf9blMTggtrG17A__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA",	
            'rating' => 7.8,
            'release_date' => '04-03-2022',
            'runtime' => "2h 56m",
            'theatres' => "",
            'ott_platform' => "2",
            'ott_link' => "https://www.primevideo.com/detail/amzn1.dv.gti.f50f8c44-66ba-4e83-94bb-82fb40c52159",
            'imdb_id' => "tt1877830",
            'movie_link'=> "https://www.2embed.cc/embed/tt1877830",
            ],
            [
                'movie_name'=> "Spider-Man: Across the Spider-Verse",
                'genres' => json_encode([1,5]),
                'director' => "Joaquim Dos Santos,Kemp Powers,Justin K. Thompson",
                'producers' => "Sony Pictures Animation,Marvel Entertainment,Arad Productions",
                'writters' => "Phil Lord,Christopher Miller,Dave Callaham",
                'actors' => "Shameik Moore,Hailee Steinfeld,Brian Tyree Henry,Oscar Isaac",
                'description' => "Miles Morales returns once again to save the multiverse! After being reunited with Gwen Stacy, Miles races across the multiverse to try and defeat a powerful foe known as the Spot. He meets many other spider people. But Miguel O'Hara doesn't approve of Miles' actions to save everyone, following canon events. He ends up on a run from Miguel and hundreds of other spider people. Will Miles save the multiverse? You're about to find out.",
                'movie_image' => "images/spiderman-across-the-spider-verse.jpg",	
                'trailer_link' => "https://imdb-video.media-imdb.com/vi872465433/1434659607842-pgv4ql-1680618823877.mp4?Expires=1696774225&Signature=DhDMLjbagz7Z84h0DwwbUs21ZpDKQLqM5E3lQifdMcp~Juz2CTn1ugDWe9OhQxf9sn-jVfIrl5pbGh89tCkkjgDbwTSFgQE0rGmaTec0qQiwlFAh5YmRT7tK4Gd6IbfK7BZS0M6EeN2bS0gGB7sVTrzoszA~chugq6S9PGXiNGgvjxQHL1kE4QxO5ueFxh0NeHWS0HYMWMmRA4G2jNJ7NUvYOCwdosRCtPsl6COONRq9A7TKdOnz5bFzHCu~JYGmS5NKybkDK5pWpNx7EUHvvXaJhoyjO-p0P7tr599XEvGvpqF4F3a3zm39mbPNVEGpKI4qyTLk3keLf-MZRjHmXw__&Key-Pair-Id=APKAIFLZBVQZ24NQH3KA",	
                'rating' => 8.7,
                'release_date' => '01-06-2023',
                'runtime' => "2h 20m",
                'theatres' => "",
                'ott_platform' => "2",
                'ott_link' => "https://www.primevideo.com/detail/amzn1.dv.gti.87f7ea62-3ae7-4236-b955-c1f21da58d91",
                'imdb_id' => "tt9362722",
                'movie_link'=> "https://www.2embed.cc/embed/tt9362722"
                ],
        ]);
    }
}
