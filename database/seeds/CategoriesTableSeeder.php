<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Ароматы',
        ]);

        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Макияж',
        ]);

        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Для лица',
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Для глаз',
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Для губ',
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Для ногтей',
        ]);
        DB::table('categories')->insert([
            'parent_id' => '2',
            'name' => 'Для тела',
        ]);

        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Уход за кожей',
        ]);

        DB::table('categories')->insert([
            'parent_id' => '8',
            'name' => 'Уход за лицом',
        ]);
        DB::table('categories')->insert([
            'parent_id' => '8',
            'name' => 'Уход за телом',
        ]);
        DB::table('categories')->insert([
            'parent_id' => '8',
            'name' => 'Персональный уход',
        ]);

        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Уход за волосами',
        ]);

        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Аксессуары',
        ]);

        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Мужчинам',
        ]);

        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Детям',
        ]);

        DB::table('categories')->insert([
            'parent_id' => null,
            'name' => 'Подарки',
        ]);
    }
}
