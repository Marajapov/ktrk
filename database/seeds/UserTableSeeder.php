<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Model\User\ModelName::truncate();
        \Model\User\ModelName::create([
            'name'       => 'Cngz Bg',
            'email'      => 'nurchin@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 1,
        ]);
        \Model\User\ModelName::create([
            'name'       => 'Abakan',
            'email'      => 'abakano21@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 2,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Edos',
            'email'      => 'eldos@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 3,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Aibek',
            'email'      => 'aibek@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 4,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Nurzat',
            'email'      => 'nurzatnew@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 5,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Ainura',
            'email'      => 'ainura.niazova@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 6,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Gulshat',
            'email'      => 'gulshatimanahunova@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 7,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Dinara',
            'email'      => 'public.relations.ktrk@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 8,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Mira',
            'email'      => 'alimova-mira@mail.ru',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 10,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Azamat',
            'email'      => 'nsmanager@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'ns',
            'channel_id' => 11,
        ]);

          \Model\User\ModelName::create([
            'name'       => 'Aigerim',
            'email'      => 'aigera.250990@gmail.com',
            'password'   => bcrypt('123123'),
            'role'       => 'admin',
            'channel_id' => 12,
        ]);
        //factory(\Model\User\ModelName::class, 50)->create();
    }
}
