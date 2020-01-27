<?php

use Illuminate\Database\Seeder;

//use App\Swatch;

class SwatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $swatches = [
            ['owner_id' => 1,
              'title' => 'bruised',
              'gradient' => 'linear-gradient(90deg, #e66465, #9198e5)',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'blue sky',
              'gradient' => 'linear-gradient(0deg, #2F80ED, #56CCF2)',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'shady garden',
              'gradient' => 'linear-gradient(90deg,, #00bf8f, #001510)',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'orange juice',
              'gradient' => 'linear-gradient(90deg, #ff8008, #ffc837)',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'iron prison',
              'gradient' => 'linear-gradient(90deg, #111c2c 66%, #928ebc)',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'rosy dusk',
              'gradient' => 'linear-gradient(90deg, #ff6e7f, #bfe9ff)',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'Do not look on the carpet',
              'gradient' => 'linear-gradient(90deg, red,green,yellow,blue',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'I threw something awful on it',
              'gradient' => 'linear-gradient(45deg, deeppink, yellow, springgreen  63%)',
              'created_at' => NOW(),
            ],
            [
              'owner_id' => 1,
              'title' => '4 candles ',
              'gradient' => 'linear-gradient(45deg, #fff722, transparent,#ff26f9)',
              'created_at' => NOW(),
            ],


        ];

        DB::table('swatches')->insert($swatches);
    }

}
