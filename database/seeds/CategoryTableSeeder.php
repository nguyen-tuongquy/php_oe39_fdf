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
        DB::table('categories')->insert([
            [
                'name' => 'Đồ ăn',
                'parent_id' => null,
            ],

            [   
                'name' => 'Đồ uống',
                'parent_id' => null,
            ],

            [
                'name' => 'Gà rán',
                'parent_id' => 1,
            ],

            [
                'name' => 'Pizza',
                'parent_id' => 1,
            ],

            [
                'name' => 'Trà sữa',
                'parent_id' => 2,
            ],
        ]);
    }
}
