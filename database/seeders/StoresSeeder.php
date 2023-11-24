<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["مستودع 1"];
        $title_en = ["Store 1"];
        $description_ar = ["اقلام"];
        $description_en = ["pens"];
        $address_ar = ["القاهرة"];
        $address_en = ["Cairo"];
        $owner = ["boula"];
        $phone = ["012457893"];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $store = Store::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'address' => $address_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'address' => $address_en[$i],
                ],
               'owner'=>$owner[$i],
               'phone' => $phone[$i]
            ]);

        }
    }
}
