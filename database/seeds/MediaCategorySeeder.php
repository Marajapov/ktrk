<?php

use Illuminate\Database\Seeder;

class MediaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\Model\MediaCategory\ModelName::truncate();
        \Model\MediaCategory\ModelName::create([
            'id'        => 1,
            'name'      => 'Жалпы',
            'nameRu'     => 'Все',
            'videoType'     => 'all',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 2,
            'name'      => 'Телеберүүлөр',
            'nameRu'     => 'Телепередачи',
            'videoType'     => 'tele',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 3,
            'name'      => 'Сериалдар',
            'nameRu'     => 'Сериалы',
            'videoType'     => 'serials',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 4,
            'name'      => 'Көркөм тасма',
            'nameRu'     => 'Художественный фильм',
            'videoType'     => 'tasma',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 5,
            'name'      => 'Маанайшат',
            'nameRu'     => 'Развлекательное',
            'videoType'     => 'maanai',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 6,
            'name'      => 'Спорт',
            'nameRu'     => 'Спорт',
            'videoType'     => 'sport',
            'published' => true,
        ]);
    }
}

