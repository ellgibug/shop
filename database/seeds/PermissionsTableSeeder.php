<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'CRUD-managers',
            'display_name' => 'CRUD-managers',
            'description' => ''
        ]);

        DB::table('permissions')->insert([
            'name' => 'edit-content',
            'display_name' => 'Изменение контекта на сайте',
            'description' => ''
        ]);

        DB::table('permissions')->insert([
            'name' => 'RU-order',
            'display_name' => 'Просмотр и изменение статуса заказа',
            'description' => ''
        ]);
    }
}
