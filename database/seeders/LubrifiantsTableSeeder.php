<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LubrifiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vonom
     */
    public function run()

{

    \DB::table('lubs')->insert([

        [

            'nom' => 'HELIX  HX5 15W50   1L' ,

            'prix' => '3000',

        ],

        [

            'nom' => 'HELIX  HX5 15W50   5L',

            'prix' => '13000',

        ],

        [

            'nom' => 'HELIX HX3 50 1L',

            'prix' => '2400',

        ],

        [

            'nom' => 'HELIX HX3 50 5L',

            'prix' => '10600',

        ],

        [

            'nom' => 'HELIX HX7 1L',

            'prix' => '3500',

        ],
        [

            'nom' => 'HELIX HX7 4L',

            'prix' => '13500',

        ],
        [

            'nom' => 'RIMULA R1 50 1L',

            'prix' => '2000',

        ],
        [

            'nom' => 'RIMULA R1 50 5L',

            'prix' => '10500',

        ],
        [

            'nom' => 'RIMULA R1 50 VRAC',

            'prix' => '1600',

        ],
        [

            'nom' => 'RIMULA R2 50 1L',

            'prix' => '2300',

        ],
        [

            'nom' => 'RIMULA R2 50 5L',

            'prix' => '10750',

        ],
        [

            'nom' => 'RIMULA R2 50 20L',

            'prix' => '40000',

        ],
        [

            'nom' => 'ATF  SPIRAX 1L',

            'prix' => '3000',

        ],
        [

            'nom' => 'ULTRA 4L',

            'prix' => '22000',

        ],

    ]);

}
}
