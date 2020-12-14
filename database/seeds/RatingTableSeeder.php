<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RatingTableSeeder extends Seeder
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
        $product = count(DB::table('products')->select('id')->get());
        $user = count(DB::table('users')->select('id')->get());

        for ($i = 0; $i < $limit; $i++)
        {
            DB::table('ratings')->insert([
                'user_id' => random_int(1, $user),
                'product_id' => random_int(1, $product),
                'comment' => $faker->paragraph(),
                'rate' => random_int(1,5),
            ]);
        }
    }
}