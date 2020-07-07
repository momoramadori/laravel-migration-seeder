<?php

use Illuminate\Database\Seeder;
use App\Product;

class UpdateProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
    }
}
