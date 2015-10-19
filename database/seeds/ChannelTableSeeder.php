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
            'display'   => 'Главная',
            'url'       => 'images/logo_notext.png',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 2,
            'name'      => 'ktr',
            'display'   => 'КТР',
            'published' => true,
        ]);

        \Model\Channel\ModelName::create([
            'id'        => 3,
            'name'      => 'muzkanal',
            'display'   => 'Муз Канал',
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
    }
}
