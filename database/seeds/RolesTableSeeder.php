<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Администатор',
            'description' => ''
        ]);

        DB::table('roles')->insert([
            'name' => 'manager',
            'display_name' => 'Менеджер',
            'description' => ''
        ]);

        DB::table('roles')->insert([
            'name' => 'content-manager',
            'display_name' => 'Контент-менеджер',
            'description' => ''
        ]);

        DB::table('roles')->insert([
            'name' => 'tech-support',
            'display_name' => 'Тех-поддержка',
            'description' => ''
        ]);
    }
}
