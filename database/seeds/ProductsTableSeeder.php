<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<200; $i++){
            DB::table('products')->insert([
                'section_id' => \rand(1, 76),
                'brand' => \rand(1, 10),
                'name' => str_random(10),
                'availability' => \rand(0, 1),
                'vendor_code' => \rand(10000, 20000),
                'image' => 'https://ds02.infourok.ru/uploads/ex/12ba/000765b9-1294b294/hello_html_31db4ce7.png',
                'price' => \rand(10, 200)
            ]);
        }

    }
}
