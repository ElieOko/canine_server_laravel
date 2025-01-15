<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\GroupeCanine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();professions
        DB::table('professions')->insert([
            [
                "nom" => "Vétérinaire",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Eleveur",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Dresseur",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Educateur",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Toiletteur",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ]
            // [
            //     "nom" => "",
            //     'created_at' => (Carbon::now())->toDateTimeString(),
            //     'updated_at' => (Carbon::now())->toDateTimeString()
            // ],
            // [
            //     "nom" => "",
            //     'created_at' => (Carbon::now())->toDateTimeString(),
            //     'updated_at' => (Carbon::now())->toDateTimeString()
            // ],
            // [
            //     "nom" => "",
            //     'created_at' => (Carbon::now())->toDateTimeString(),
            //     'updated_at' => (Carbon::now())->toDateTimeString()
            // ]
        ]);
        DB::table('titles')->insert([
            [
                "name" =>"Monsieur",
                "code" =>"Mr",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "name" =>"Madame",
                "code" =>"Mdm",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ]
        ]);
        // DB::table('races')->insert([
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],


        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],

        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],

        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],

        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],

        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],

        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         "name" =>"",
        //         "other_name" =>"",
        //         "description" => "",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ]

        // ]);
        DB::table('type_comptes')->insert([
            [
                "name" =>"User System",
                "level_access" =>1,
                "is_active" => true,
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "name" =>"Personnel System",
                "level_access" =>0,
                "is_active" => true,
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ]
        ]);
        // DB::table('groupe_canines')->insert([
        //     [
        //        'name' => 'Groupe 1' ,
        //        'description' => "Le Groupe 1 est constitué des chiens de Berger et des Bouviers, à l’exception des chiens de Bouvier suisses, ces derniers étant intégrés au Groupe 2. Les chiens du Groupe 1 n’ont pas tous des caractéristiques physiques communes – quelques-uns sont très différents -, mais ils possèdent tous des similitudes au niveau de leur utilisation ancestrale et donc, en termes d’aptitudes. Coup de projecteur sur ces chiens de troupeaux.",
        //        'created_at' => (Carbon::now())->toDateTimeString(),
        //        'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 2' ,
        //         'description' => "Le Groupe 2 est constitué de 69 races canines et variantes, certaines semblant de prime abord n’avoir aucune similitude entre elles car ces chiens sont physiquement très différents les uns des autres. Pinscher et Schnauzer côtoient les Molossoïdes mais aussi les chiens de bouviers suisses (les autres chiens de bouviers relevant du Groupe 1). C’est donc en tenant compte de leurs fonctions historiques que la Fédération Cynologique Internationale (FCI) a établi en première intention ce classement, les chiens du Groupe 2 ayant tous été à l’origine utilisés pour protéger les troupeaux mais aussi les personnes et leurs biens. Coup de projecteur sur ces chiens de garde tous gabarits.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 3' ,
        //         'description' => "Le Groupe 3 (Terriers) compte 34 races canines telles que reconnues par la Fédération Cynologique Internationale (FCI) et il est le reflet exact de la liste communiquée par la Société Centrale Canine (SCC). Ce Groupe 3 est divisé en quatre sections, chacune regroupant des races de chiens présentant des similitudes soit en termes d’utilisation, soit au regard des critères morphologiques. Voici tout ce qu’il faut savoir sur le Groupe 3 qui intègre uniquement les canidés de Type Terrier dont la fonction première est le déterrage.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 4' ,
        //         'description' => "Le Groupe 4 compte très peu de races canines puisqu’il n’intègre que les Teckels, tel que l’ont établi la Fédération Cynologique Internationale (FCI) et la Société Centrale Canine (SCC). Notons toutefois que trois variétés de Teckels sont admises et différents types de pelages.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 5' ,
        //         'description' => "Le Groupe 5 est divisé en 8 sections, les races canines étant regroupées en fonction de leur morphologie alors que les autres groupes ont été constitués par la Fédération Cynologique Internationale (FCI) et la Société Centrale Canine (SCC) en fonction des aptitudes des canidés. Voici la liste des chiens de type Spitz et de type Primitif que l’on trouve dans le Groupe 5, section par section, et leurs principales caractéristiques.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 6' ,
        //         'description' => "Ce Groupe 6 se compose de races canines sportives. Ces chiens, dont l’instinct de prédateur est très développé, sont utilisés pour la chasse ou encore pour la garde. Tour d’horizon des chiens du Groupe 6.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 7' ,
        //         'description' => "Le groupe 7 regroupe 37 races canines selon la Société Centrale Canine (SCC) et seulement 36 selon la Fédération Cynologique Internationale (FCI). Elles sont catégorisées en 2 sections. Il s’agit de chiens de chasse bien sûr, tous étant reconnus pour leur capacité innée à marquer l’arrêt en cas de repérage de gibier, et notamment d’oiseaux. Voyons plus précisément quels sont ces chiens d’arrêt continentaux, britanniques et irlandais qui constituent ce groupe 7.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 8' ,
        //         'description' => "Le Groupe 8 est constitué de 3 sections, intégrant des spécialistes de la chasse faisant preuve d’une très grande volonté, d’un dévouement hors norme, et qu’aucune difficulté ne rebute. Coup de projecteur sur les 22 races canines du groupe 8 et leurs principales qualités.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 9' ,
        //         'description' => "Le groupe 9 compte 25 races canines auxquelles s’ajoute le Petit chien russe (Russian Toy Terrier), une race reconnue à titre provisoire par la FCI, c’est-à-dire la Fédération Canine Internationale. Ces chiens sont différents les uns des autres sur le plan morphologique et sont originaires de zones géographiques diverses. Découvrons les 11 sections du groupe 9 et faisons le point sur les particularités de ces chiens d’agrément et de compagnie.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ],
        //     [
        //         'name' => 'Groupe 10' ,
        //         'description' => "Le groupe 10 répertorie 13 races canines, validées par la Société Centrale Canine (SCC) et la Fédération Cynologique Internationale (FCI). Toutes sont des races anciennes de chiens de chasse à vue d’une rapidité déconcertante, à noter d’ailleurs que le terme lévrier provient de lièvre. Ces chiens sont dotés d’une morphologie bien particulière. Ils sont répartis en 3 sections et classés selon le type de pelage, exception faite de quelques lévriers primitifs ou apparentés qui sont intégrés au groupe 5. Voici donc la constitution du groupe 10 et les principales spécificités de ces lévriers.",
        //         'created_at' => (Carbon::now())->toDateTimeString(),
        //         'updated_at' => (Carbon::now())->toDateTimeString()
        //     ]
        // ]);
    }
}
