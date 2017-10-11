<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'category_id' => 1,
            'name' => 'Женская парфюмерия',
        ]);
        DB::table('sections')->insert([
            'category_id' => 1,
            'name' => 'Мужская парфюмерия',
        ]);
        DB::table('sections')->insert([
            'category_id' => 1,
            'name' => 'Детская парфюмерия',
        ]);

        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'Основа для макияжв',
        ]);
        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'Тональные средства',
        ]);
        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'Корректирующие средства',
        ]);
        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'Пудра',
        ]);
        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'Румяна',
        ]);
        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'Матирующие',
        ]);
        DB::table('sections')->insert([
        'category_id' => 3,
        'name' => 'Хайлайтеры',
        ]);
        DB::table('sections')->insert([
        'category_id' => 3,
        'name' => 'Бронзеры',
        ]);
        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'Контуринг',
        ]);
        DB::table('sections')->insert([
            'category_id' => 3,
            'name' => 'BB&CC средства',
        ]);

        DB::table('sections')->insert([
            'category_id' => 4,
            'name' => 'Тушь',
        ]);
        DB::table('sections')->insert([
            'category_id' => 4,
            'name' => 'Тени',
        ]);
        DB::table('sections')->insert([
            'category_id' => 4,
            'name' => 'Контурные карандаши и подводка',
        ]);
        DB::table('sections')->insert([
            'category_id' => 4,
            'name' => 'Основа для макияжа',
        ]);
        DB::table('sections')->insert([
            'category_id' => 4,
            'name' => 'Для бровец',
        ]);

        DB::table('sections')->insert([
            'category_id' => 5,
            'name' => 'Блеск',
        ]);
        DB::table('sections')->insert([
            'category_id' => 5,
            'name' => 'Помада',
        ]);
        DB::table('sections')->insert([
            'category_id' => 5,
            'name' => 'Конкурные карандаши',
        ]);
        DB::table('sections')->insert([
            'category_id' => 5,
            'name' => 'Уход за губами',
        ]);

        DB::table('sections')->insert([
            'category_id' => 6,
            'name' => 'Лак',
        ]);
        DB::table('sections')->insert([
            'category_id' => 6,
            'name' => 'Средства для снятия лака',
        ]);
        DB::table('sections')->insert([
            'category_id' => 6,
            'name' => 'Уход за ногтями',
        ]);

        DB::table('sections')->insert([
            'category_id' => 7,
            'name' => 'Пудра/блекс',
        ]);
        DB::table('sections')->insert([
            'category_id' => 7,
            'name' => 'Автозагары',
        ]);

        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Очищение',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Увлажнение',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Питание',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Антивозрастной уход',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Маски',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Сыворотки',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Кожа вокруг глаз',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Специальные средства (шея, декольте, губы)',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'BB&CC средства',
        ]);
        DB::table('sections')->insert([
            'category_id' => 9,
            'name' => 'Солнечная линия',
        ]);

        DB::table('sections')->insert([
            'category_id' => 10,
            'name' => 'Очищение',
        ]);
        DB::table('sections')->insert([
            'category_id' => 10,
            'name' => 'Увлажнение',
        ]);
        DB::table('sections')->insert([
            'category_id' => 10,
            'name' => 'Питание',
        ]);
        DB::table('sections')->insert([
            'category_id' => 10,
            'name' => 'Антицеллюлитные средства',
        ]);
        DB::table('sections')->insert([
            'category_id' => 10,
            'name' => 'Антивозрастной уход',
        ]);
        DB::table('sections')->insert([
            'category_id' => 10,
            'name' => 'Средства ухода для рук',
        ]);
        DB::table('sections')->insert([
            'category_id' => 10,
            'name' => 'Солнечная линия',
        ]);

        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Дезодоранты-антиперспиранты',
        ]);
        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Для ванной и душа',
        ]);
        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Солнечная линия',
        ]);
        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Средства ухода для ног',
        ]);
        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Депиляция',
        ]);
        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Средства ухода за полостью рта',
        ]);
        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Личная гигиена',
        ]);
        DB::table('sections')->insert([
            'category_id' => 11,
            'name' => 'Аксессуары по уходу за телом',
        ]);

        DB::table('sections')->insert([
            'category_id' => 12,
            'name' => 'Шампуни',
        ]);
        DB::table('sections')->insert([
            'category_id' => 12,
            'name' => 'Кондиционеры и бальзамы',
        ]);
        DB::table('sections')->insert([
            'category_id' => 12,
            'name' => 'Укладка и стайлинг',
        ]);
        DB::table('sections')->insert([
            'category_id' => 12,
            'name' => 'Специальные средства',
        ]);
        DB::table('sections')->insert([
            'category_id' => 12,
            'name' => 'Окрашивание',
        ]);
        DB::table('sections')->insert([
            'category_id' => 12,
            'name' => 'Аксессуары для волос',
        ]);
        DB::table('sections')->insert([
            'category_id' => 12,
            'name' => 'Профессиональная косметика для волос',
        ]);

        DB::table('sections')->insert([
            'category_id' => 13,
            'name' => 'Аксессуары для маникюра',
        ]);
        DB::table('sections')->insert([
            'category_id' => 13,
            'name' => 'Аксессуары для педикюра',
        ]);
        DB::table('sections')->insert([
            'category_id' => 13,
            'name' => 'Аксессуары для макияжа',
        ]);
        DB::table('sections')->insert([
            'category_id' => 13,
            'name' => 'Колготки',
        ]);
        DB::table('sections')->insert([
            'category_id' => 13,
            'name' => 'Разное',
        ]);

        DB::table('sections')->insert([
            'category_id' => 14,
            'name' => 'Мужская парфюмерия',
        ]);
        DB::table('sections')->insert([
            'category_id' => 14,
            'name' => 'Уход за кожей для мужчин',
        ]);
        DB::table('sections')->insert([
            'category_id' => 14,
            'name' => 'Средства для бритья',
        ]);
        DB::table('sections')->insert([
            'category_id' => 14,
            'name' => 'Уход за волосами',
        ]);
        DB::table('sections')->insert([
            'category_id' => 14,
            'name' => 'Дезодоранты',
        ]);
        DB::table('sections')->insert([
            'category_id' => 14,
            'name' => 'Для ванной и душа',
        ]);

        DB::table('sections')->insert([
            'category_id' => 15,
            'name' => 'Детская парфюмерия',
        ]);
        DB::table('sections')->insert([
            'category_id' => 15,
            'name' => 'Для ванной и душа',
        ]);
        DB::table('sections')->insert([
            'category_id' => 15,
            'name' => 'Уход за кожей',
        ]);

        DB::table('sections')->insert([
            'category_id' => 16,
            'name' => 'Подарки для нее',
        ]);
        DB::table('sections')->insert([
            'category_id' => 16,
            'name' => 'Подарки для него',
        ]);
        DB::table('sections')->insert([
            'category_id' => 16,
            'name' => 'Электронные сертификаты',
        ]);








    }
}
