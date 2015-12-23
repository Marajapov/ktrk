<?php

use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Model\Channel\ModelName::truncate();

        \Model\Channel\ModelName::create([
            'id'        => 1,
            'name'      => 'general',
            'display'   => 'Общий',
            'file'       => 'images/logo_notext.png',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 2,
            'name'      => 'ktrk',
            'display'   => 'КТРК',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 3,
            'name'      => 'muzkanal',
            'display'   => 'Музыка',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 4,
            'name'      => 'balastan',
            'display'   => 'Баластан',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 5,
            'name'      => 'madaniyat',
            'display'   => 'Маданият',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 6,
            'name'      => 'kyrgyzradio',
            'display'   => 'Кыргыз Радио',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 7,
            'name'      => 'birinchi',
            'display'   => 'Биринчи Радио',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 8,
            'name'      => 'dostuk',
            'display'   => 'Достук',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 9,
            'name'      => 'minkiyal',
            'display'   => 'Мин Кыял',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 10,
            'name'      => 'baldar',
            'display'   => 'Балдар',
            'published' => true,
        ]);
    }
}
