<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Model\Category\ModelName::truncate();

        \Model\Category\ModelName::create([
            'id'        => 1,
            'name'      => 'sayasatjanakoom',
            'title'     => 'Саясат жана коом',
            'order'     => 1,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 2,
            'name'      => 'economyandbisnes',
            'title'     => 'Экономика жана бизнес',
            'order'     => 2,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 3,
            'name'      => 'musicandproduction',
            'title'     => 'Музыка жана чыгармачылык',
            'order'     => 3,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 4,
            'name'      => 'science',
            'title'     => 'Илим жана билим',
            'order'     => 4,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 5,
            'name'      => 'village',
            'title'     => 'Айыл чарба',
            'order'     => 5,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 6,
            'name'      => 'madaniyat',
            'title'     => 'Маданият',
            'order'     => 6,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 7,
            'name'      => 'sport',
            'title'     => 'Спорт',
            'order'     => 7,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 8,
            'name'      => 'health',
            'title'     => 'Ден соолук',
            'order'     => 8,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 9,
            'name'      => 'baldar',
            'title'     => 'Балдар',
            'order'     => 9,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 10,
            'name'      => 'internet',
            'title'     => 'Интернет жана технологиялар',
            'order'     => 10,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 11,
            'name'      => 'security',
            'title'     => 'Коргонуу жана коопсуздук',
            'order'     => 11,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 12,
            'name'      => 'corruption',
            'title'     => 'Коррупция',
            'order'     => 12,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 13,
            'name'      => 'kylmysh',
            'title'     => 'Кылмыш',
            'order'     => 13,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 14,
            'name'      => 'din',
            'title'     => 'Дин',
            'order'     => 14,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 15,
            'name'      => 'analytics',
            'title'     => 'Аналитика',
            'order'     => 15,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 16,
            'name'      => 'aymaktagynews',
            'title'     => 'Аймактык жаңылыктар',
            'order'     => 16,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 17,
            'name'      => 'broard',
            'title'     => 'Чек ара',
            'order'     => 17,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 18,
            'name'      => 'ecology',
            'title'     => 'Экология',
            'order'     => 18,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 19,
            'name'      => 'turizm',
            'title'     => 'Туризм',
            'order'     => 19,
            'published' => true,
        ]);

        \Model\Category\ModelName::create([
            'id'        => 20,
            'name'      => 'ukukkorgoo',
            'title'     => 'Укук коргоо',
            'order'     => 20,
            'published' => true,
        ]);

        // factory(\Model\Category\ModelName::class, 10)->create();
    }
}
