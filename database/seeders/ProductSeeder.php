<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $img = [
            '1' =>  [ 'boximage' => "anno2070-1.jpg",     'img2' => "anno2070-2.jpg",     'img3' => "anno2070-3.jpg",       'img4' => "anno2070-4.jpg"],
            '2' =>  [ 'boximage' => "batman-1.jpg",       'img2' => "batman-2.jpg",       'img3' => "batman-3.jpg",         'img4' => "batman-4.jpg"],
            '3' =>  [ 'boximage' => "bioshock-1.jpg",     'img2' => "bioshock-2.jpg",     'img3' => "bioshock-3.jpg",       'img4' => "bioshock-4.jpg"],
            '4' =>  [ 'boximage' => "cod4-1.jpg",         'img2' => "cod4-2.jpg",         'img3' => "cod4-3.jpg",           'img4' => "cod4-4.jpg"],
            '5' =>  [ 'boximage' => "darksouls-1.jpg",    'img2' => "darksouls-2.jpg",    'img3' => "darksouls-3.jpg",      'img4' => "darksouls-4.jpg"],
            '6' =>  [ 'boximage' => "dirt2-1.jpeg",       'img2' => "dirt2-2.jpg",        'img3' => "dirt2-3.jpg",          'img4' => "dirt2-4.jpg"],
            '7' =>  [ 'boximage' => "f1-1.jpg",           'img2' => "f1-2.jpg",           'img3' => "f1-3.jpg",             'img4' => "f1-4.jpg"],
            '8' =>  [ 'boximage' => "factorio-1.webp",    'img2' => "factorio-2.jpg",     'img3' => "factorio-3.jpg",       'img4' => "factorio-4.jpg"],
            '9' =>  [ 'boximage' => "forest-1.jpg",       'img2' => "forest-2.jpg",       'img3' => "forest-3.jpg",         'img4' => "forest-4.jpg"],
            '10' => [ 'boximage' => "gow-1.webp",         'img2' => "gow-2.jpeg",         'img3' => "gow-3.jpeg",           'img4' => "gow-4.jpeg"],
            '11' => [ 'boximage' => "gta5-1.jpg",         'img2' => "gta5-2.jpg",         'img3' => "gta5-3.jpg",           'img4' => "gta5-4.jpg"],
            '12' => [ 'boximage' => "gw2-1.png",          'img2' => "gw2-2.jpg",          'img3' => "gw2-3.jpg",            'img4' => "gw2-4.jpg"],
            '13' => [ 'boximage' => "halo-1.jpg",         'img2' => "halo-2.jpg",         'img3' => "halo-3.jpg",           'img4' => "halo-4.jpg"],
            '14' => [ 'boximage' => "hk-1.jpeg",          'img2' => "hk-2.jpg",           'img3' => "hk-3.jpg",             'img4' => "hk-4.jpg"],
            '15' => [ 'boximage' => "hl2-1.jpg",          'img2' => "hl2-2.jpg",          'img3' => "hl2-3.jpg",            'img4' => "hl2-4.jpg"],
            '16' => [ 'boximage' => "iracing-1.jpg",      'img2' => "iracing-2.jpg",      'img3' => "iracing-3.jpg",        'img4' => "iracing-4.jpg"],
            '17' => [ 'boximage' => "legosw-1.jpg",       'img2' => "legosw-2.jpg",       'img3' => "legosw-3.jpg",         'img4' => "legosw-4.jpg"],
            '18' => [ 'boximage' => "me2-1.jpg",          'img2' => "me2-2.jpg",          'img3' => "me2-3.jpg",            'img4' => "me2-4.jpg"],
            '19' => [ 'boximage' => "mhw-1.jpg",          'img2' => "mhw-2.jpg",          'img3' => "mhw-3.jpg",            'img4' => "mhw-4.jpg"],
            '20' => [ 'boximage' => "nw-1.jpg",           'img2' => "nw-2.jpg",           'img3' => "nw-3.jpg",             'img4' => "nw-4.jpg"],
            '21' => [ 'boximage' => "ra2-1.jpg",          'img2' => "ra2-2.jpg",          'img3' => "ra2-3.jpg",            'img4' => "ra2-4.jpg"],
            '22' => [ 'boximage' => "rdr2-1.jpg",         'img2' => "rdr2-2.jpg",         'img3' => "rdr2-3.jpg",           'img4' => "rdr2-4.jpg"],
            '23' => [ 'boximage' => "rome2tw-1.jpeg",     'img2' => "rome2tw-2.jpg",      'img3' => "rome2tw-3.jpg",        'img4' => "rome2tw-4.jpg"],
            '24' => [ 'boximage' => "satisfactory-1.jpg", 'img2' => "satisfactory-2.jpg", 'img3' => "satisfactory-3.jpg",   'img4' => "satisfactory-4.jpg"],
            '25' => [ 'boximage' => "sc-1.jpg",           'img2' => "sc-2.jpg",           'img3' => "sc-3.jpg",             'img4' => "sc-4.jpg"],
            '26' => [ 'boximage' => "sc6-1.jpg",          'img2' => "sc6-2.jpg",          'img3' => "sc6-3.jpg",            'img4' => "sc6-4.jpg"],
            '27' => [ 'boximage' => "skyrim-1.png",       'img2' => "skyrim-2.jpg",       'img3' => "skyrim-3.jpg",         'img4' => "skyrim-4.jpg"],
            '28' => [ 'boximage' => "terraria-1.jpg",     'img2' => "terraria-2.jpg",     'img3' => "terraria-3.jpg",       'img4' => "terraria-4.jpg"],
            '29' => [ 'boximage' => "valheim-1.jpg",      'img2' => "valheim-2.jpg",      'img3' => "valheim-3.jpg",        'img4' => "valheim-4.jpg"],
            '30' => [ 'boximage' => "whtw2-1.jpg",        'img2' => "whtw2-2.jpg",        'img3' => "whtw2-3.jpg",          'img4' => "whtw2-4.jpg"],
        ];  

        $name = [
            '1' => "ANNO 2070",
            '2' => "Batman Arkham Asylum",
            '3' => "Bioshock",
            '4' => "Call of Duty 4",
            '5' => "Darksouls",
            '6' => "Dirt 2",
            '7' => "F1 2021",
            '8' => "Factorio",
            '9' => "The Forest",
            '10' => "God of War",
            '11' => "Grand Theft Auto V",
            '12' => "Guild Wars 2",
            '13' => "Halo Combat Evolved",
            '14' => "Hollow Knight",
            '15' => "Half Life 2",
            '16' => "I Racing",
            '17' => "Lego Star Wars",
            '18' => "Mass Effect 2",
            '19' => "Monster Hunter World",
            '20' => "New World",
            '21' => "Red Alert 2 Yuri's Revenge",
            '22' => "Red Dead Redemption 2",
            '23' => "Rome 2 Total War",
            '24' => "Satisfactory",
            '25' => "Supreme Commander",
            '26' => "Soulcalibur 6",
            '27' => "The Elder Scrolls Skyrim",
            '28' => "Terraria",
            '29' => "Valheim",
            '30' => "Warhammer 2 Total War",
        ];

        $slug = [
            '1' => "anno2070",
            '2' => "batman",
            '3' => "bioshock",
            '4' => "cod4",
            '5' => "darksouls",
            '6' => "dirt2",
            '7' => "f1",
            '8' => "factorio",
            '9' => "forest",
            '10' => "gow",
            '11' => "gta5",
            '12' => "gw2",
            '13' => "halo",
            '14' => "hk",
            '15' => "hl2",
            '16' => "iracing",
            '17' => "lsw",
            '18' => "me2",
            '19' => "mhw",
            '20' => "nw",
            '21' => "ra2yr",
            '22' => "rdr2",
            '23' => "r2tw",
            '24' => "satisfactory",
            '25' => "sc",
            '26' => "sc6",
            '27' => "skyrim",
            '28' => "terraria",
            '29' => "valheim",
            '30' => "whtw2"
        ];

        $description = [
            '1' => "Build your society of the future, colonize islands, and create sprawling megacities with multitudes of buildings, vehicles, and resources to manage.",
            '2' => "Experience what it’s like to be Batman and face off against Gotham's greatest villians. Explore every inch of Arkham Asylum and roam freely on the infamous island.",
            '3' => "BioShock is a shooter unlike any you've ever played, loaded with weapons and tactics never seen. You'll have a complete arsenal at your disposal from simple revolvers to grenade launchers and chemical throwers.",
            '4' => "The new action-thriller from the award-winning team at Infinity Ward, the creators of the Call of Duty® series, delivers the most intense and cinematic action experience ever. Call of Duty 4: Modern Warfare arms gamers with an arsenal of advanced and powerful modern day firepower.",
            '5' => "Then, there was fire. Re-experience the critically acclaimed, genre-defining game that started it all. Beautifully remastered, return to Lordran in stunning high-definition detail running at 60fps.",
            '6' => "DiRT Rally 2.0 dares you to carve your way through a selection of iconic rally locations from across the globe, in the most powerful off-road vehicles ever made, knowing that the smallest mistake could end your stage.",
            '7' => "Every story has a beginning in F1® 2021, the official videogame of the 2021 FIA FORMULA ONE WORLD CHAMPIONSHIP™. Enjoy the stunning new features of F1® 2021, including the thrilling story experience ‘Braking Point’, two-player Career, and get even closer to the grid with ‘Real-Season Start’.",
            '8' => "Factorio is a game about building and creating automated factories to produce items of increasing complexity, within an infinite 2D world. Use your imagination to design your factory, combine simple elements into ingenious structures, and finally protect it from the creatures who don't really like you.",
            '9' => "As the lone survivor of a passenger jet crash, you find yourself in a mysterious forest battling to stay alive against a society of cannibalistic mutants. Build, explore, survive in this terrifying first person survival horror simulator.",
            '10' => "In God of War, players control Kratos, a Spartan warrior who is sent by the Greek gods to kill Ares, the god of war. As the story progresses, Kratos is revealed to be Ares' former servant, who had been tricked into killing his own family and is haunted by terrible nightmares.",
            '11' => "Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.",
            '12' => "Guild Wars 2 is an online role-playing game with fast-paced action combat, a rich and detailed universe of stories, awe-inspiring landscapes to explore, two challenging player vs. player modes—and no subscription fees!",
            '13' => "After crash-landing on a mysterious ringworld known as Halo, the Master Chief is tasked with helping the remaining humans survive against the overwhelming Covenant forces. While doing so, he and Cortana uncover Halo's dark secret and fight to protect all life in the galaxy.",
            '14' => "Forge your own path in Hollow Knight! An epic action adventure through a vast ruined kingdom of insects and heroes. Explore twisting caverns, battle tainted creatures and befriend bizarre bugs, all in a classic, hand-drawn 2D style.",
            '15' => "The player again picks up the crowbar of research scientist Gordon Freeman, who finds himself on an alien-infested Earth being picked to the bone, its resources depleted, its populace dwindling. Freeman is thrust into the unenviable role of rescuing the world from the wrong he unleashed back at Black Mesa. And a lot of people he cares about are counting on him.",
            '16' => "We are the world’s premier motorsports racing game. An iRacing membership provides entry into the newest form of motorsport: internet racing. Internet racing is a fun, easy, and inexpensive way for race fan and gamers alike to enjoy the thrill of the racetrack from the comfort of their home.",
            '17' => "The galaxy is yours with LEGO® Star Wars™: The Skywalker Saga! Play through all nine saga films in a brand-new video game unlike any other. Fly across space to the saga's most memorable planets, in any order, at any time. A galaxy far, far away has never been more fun!",
            '18' => "Recruit. Explore. Control.Two years after Commander Shepard repelled invading Reapers bent on the destruction of organic life, a mysterious new enemy has emerged. On the fringes of known space, something is silently abducting entire human colonies.",
            '19' => "Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.",
            '20' => "Explore a thrilling, open-world MMO filled with danger and opportunity where you'll forge a new destiny for yourself as an adventurer shipwrecked on the supernatural island of Aeternum. Endless opportunities to fight, forage, and forge await you among the island's wilderness and ruins. Channel supernatural forces or wield deadly weapons in a classless, real-time combat system, and fight alone, with a small team, or in massed armies for PvE and PvP battles—the choices are all yours.",
            '21' => "Command & Conquer: Yuri's Revenge is an expansion pack to Command & Conquer: Red Alert 2 developed by Westwood Studios. ... The game is centered on a shadowy ex-Soviet figure named Yuri who has established a secret army of his own and poses a threat to the free will of the world.",
            '22' => "Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.",
            '23' => "Total War: Rome II is set in Europe, the Mediterranean, and the Near East in the Classical antiquity period. The grand single-player campaign begins in 272 BC and lasts for 300 years. However, the player also has the option to play further, as there are no timed victory conditions.",
            '24' => "Satisfactory is a first-person open-world factory building game with a dash of exploration and combat. Play alone or with friends, explore an alien planet, create multi-story factories, and enter conveyor belt heaven!",
            '25' => "For a thousand years, three opposing forces have waged war for what they believe is true. There can be no room for compromise: their way is the only way. Dubbed The Infinite War, this devastating conflict has taken its toll on a once-peaceful galaxy and has only served to deepen the hatred between them.",
            '26' => "Bring more than your fists to the fight! Featuring all-new battle mechanics and characters, SOULCALIBUR VI marks a new era of the historic franchise. Welcome back to the stage of history!",
            '27' => "Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail. The Special Edition includes the critically acclaimed game and add-ons with all-new features like remastered art and effects, volumetric god rays, dynamic depth of field, screen-space reflections, and more. Skyrim Special Edition also brings the full power of mods to the PC and consoles. New quests, environments, characters, dialogue, armor, weapons and more – with Mods, there are no limits to what you can experience.",
            '28' => "Dig, Fight, Explore, Build: The very world is at your fingertips as you fight for survival, fortune, and glory. Will you delve deep into cavernous expanses in search of treasure and raw materials with which to craft ever-evolving gear, machinery, and aesthetics? Perhaps you will choose instead to seek out ever-greater foes to test your mettle in combat? Maybe you will decide to construct your own city to house the host of mysterious allies you may encounter along your travels?",
            '29' => "A brutal exploration and survival game for 1-10 players, set in a procedurally-generated purgatory inspired by viking culture. Battle, build, and conquer your way to a saga worthy of Odin’s patronage!",
            '30' => "Strategy gaming perfected. A breath-taking campaign of exploration, expansion and conquest across a fantasy world. Turn-based civilisation management and real-time epic strategy battles with thousands of troops and monsters at your command.",
        ];

        $publisher = [
            '1' => "blue byte",
            '2' => "rocksteady studios",
            '3' => "2k",
            '4' => "infinity ward",
            '5' => "qloc",
            '6' => "codemasters",
            '7' => "codemasters",
            '8' => "wube software",
            '9' => "endnight games",
            '10' => "santa monica studio",
            '11' => "rockstar games",
            '12' => "arena net",
            '13' => "bungie",
            '14' => "team cherry",
            '15' => "valve",
            '16' => "iracing",
            '17' => "tt games",
            '18' => "bioware",
            '19' => "capcom",
            '20' => "amazon",
            '21' => "electronic arts",
            '22' => "rockstar games",
            '23' => "creative assembly",
            '24' => "coffee stain studios",
            '25' => "gas powered games",
            '26' => "bandai namco",
            '27' => "bethesda",
            '28' => "re-logic",
            '29' => "iron gate ab",
            '30' => "creative assembly",
        ];

        foreach ($name as $key => $value)
        {
            \App\Models\Product::factory()->create(
                [
                    'vat' => 21,
                    'name' => $value,
                    'publisher' => $publisher[$key],
                    'slug' => $slug[$key],
                    'description' => $description[$key],
                ]
                );

            // product images 

            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$key]['boximage'], 
                'box' => 1,
                'product_id' => $key,
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$key]['img2'], 
                'box' => 0,
                'product_id' => $key
            ]);


            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$key]['img3'], 
                'box' => 0,
                'product_id' => $key
            ]);

            \App\Models\Image::factory()->create([
                'location' => '/images/product-images/' . $img[$key]['img4'], 
                'box' => 0,
                'product_id' => $key
            ]);

            // product ratings

              \App\Models\Rating::factory(rand(0,10))->create([
                'product_id' => $key,
                'user_id' => rand(1, 10)
            ]);

            // category_product pivot table

            $catprod = [
                [
                    'product_id' => $key,
                    'category_id' => rand(1,2), 
                ],
                [
                    'product_id' => $key,
                    'category_id' => rand(3,4), 
                ],
                [
                    'product_id' => $key,
                    'category_id' => rand(5,6), 
                ],
        
            ];

            DB::table('category_product')->insert($catprod);

            // platform_product pivot table

            $platprod = [
                [
                    'product_id' => $key,
                    'platform_id' => rand(1,2), 
                ],
                [
                    'product_id' => $key,
                    'platform_id' => rand(3,4), 
                ],
            ];

            DB::table('platform_product')->insert($platprod);

        }
    }
}