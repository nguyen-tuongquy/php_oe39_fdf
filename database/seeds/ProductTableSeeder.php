<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 10;
        $category = count(DB::table('categories')->select('id')->get());

        for ($i = 0; $i < $limit; $i++)
        {
            DB::table('products')->insert([
                'category_id' => random_int(1, $category),
                'name' => $faker->word(),
                'description' => $faker->sentence,
                'price' => $faker->numberBetween($min = 10000, $max = 100000),
                'status' => 1,
                'image' => $faker->imageUrl($width = 600, $height = 800),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
