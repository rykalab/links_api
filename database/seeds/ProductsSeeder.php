<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pl_PL');
 
        for ($i=0; $i < 200; $i++) {
            $product = new \App\Product();
            $product->name = $faker->name;
            $product->price = $faker->numberBetween($min = 1, $max = 200);
            $product->save();
        }
    }
}
