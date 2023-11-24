<?php

namespace Database\Seeders;

use App\Models\StoreProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quantity=[25];
        $product_id=[1];
        $store_id=[1];
      

        for ($i = 0; $i < 1; $i++) {
            $StoreProduct = StoreProduct::create([
                
               'quantity'=>$quantity[$i],
               'product_id' => $product_id[$i],
               'store_id' => $store_id[$i],
            ]);
        }
    }
}
