<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newProduct = new Product();
            $newProduct->kind = $faker-> shuffle('prodottocasuale');
            $newProduct->color = $faker-> safeColorName;
            $newProduct->size = $faker-> randomElement($array = array ('XS','S','M','L','XL'));
            $newProduct->price = $faker-> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5);
            $newProduct->save();
        } 
    }
}
