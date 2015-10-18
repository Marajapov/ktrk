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
            'name'      => 'Бардык',
            'name_ru'     => 'Все',
            'resource_type'     => 'all',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 2,
            'name'      => 'Телеберүүлөр',
            'name_ru'     => 'Телепередачи',
            'resource_type'     => 'tele',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 3,
            'name'      => 'Сериалдар',
            'name_ru'     => 'Сериалы',
            'resource_type'     => 'serials',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 4,
            'name'      => 'Көркөм тасма',
            'name_ru'     => 'Художественный фильм',
            'resource_type'     => 'tasma',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 5,
            'name'      => 'Маанайшат',
            'name_ru'     => 'Развлекательное',
            'resource_type'     => 'maanai',
            'published' => true,
        ]);

        \Model\MediaCategory\ModelName::create([
            'id'        => 6,
            'name'      => 'Спорт',
            'name_ru'     => 'Спорт',
            'resource_type'     => 'sport',
            'published' => true,
        ]);
    }
}

