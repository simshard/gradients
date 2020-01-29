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
              'title' => 'Default',
              'gradient' => 'linear-gradient(90deg, rgb(255, 0, 0) 0%, rgb(0, 0, 249) 100%)',
              'direction'=> 90,
              'handlers'=> '[{"position":0,"selected":0,"color":"rgb(255, 0, 0)"},{"position":100,"selected":1,"color":"rgb(0, 0, 255)"}]',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'blue sky',
              'gradient' => 'linear-gradient(0deg, rgb(47, 128, 237), rgb(86, 204, 242))',
              'direction'=> 90,
              'handlers'=> '[{"position":0,"selected":0,"color":"rgb(47, 128, 237)"},{"position":100,"selected":1,"color":"rgb(86, 204, 242)"}]',
              'created_at' => NOW(),
            ],
            ['owner_id' => 1,
              'title' => 'shady garden',
              'gradient' => 'linear-gradient(67deg, rgb(0, 191, 143), rgb(0, 21, 16))',
              'direction'=> 90,
              'handlers'=> '[{"position":0,"selected":0,"color":"rgb(0, 191, 143)"},{"position":100,"selected":1,"color":"rgb(0, 21, 16)"}]',
              'created_at' => NOW(),
            ],
        ];

        DB::table('swatches')->insert($swatches);
    }

}
