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
        $elenco_prodotti = config('prodotti');
        foreach ($elenco_prodotti as $prodotto) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->kind =$prodotto['kind'];
            $nuovo_prodotto->color =$prodotto['color'];
            $nuovo_prodotto->size =$prodotto['size'];
            $nuovo_prodotto->price =$prodotto['price'];
            $nuovo_prodotto->save();
            }
                
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
