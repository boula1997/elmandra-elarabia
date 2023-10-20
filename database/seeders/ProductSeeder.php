<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $title_en = [
                       "FIFA 24",
                        "PES2015",
                        "PES2016",
                    ];

        $subtitle_en = [
                        null,
                        null,
                        null,
                        
                       ];
                       
        $description_en = [
                            null,
                            null,
                            null,
                          ];

        $title_ar = [
                        "FIFA 24",
                        "بيس2015",
                        "بيس2016",
                       
                    ];  

        $subtitle_ar = [
                        null,
                        null,
                        null,
                       ];

        $description_ar = [
                            null,
                            null,
                            null,
                          ];

        $images = [
                    "images/ht14HpBz9XFtSQzjwfGuouYlvbqRAzqZR0tDMVR5.jpg",
                    null, 
                    null,
                  ];

        $icons= [ 
                    null,
                    null,
                    null,
                ];

        for ($i = 0; $i < count($title_ar); $i++) {
            $product = Product::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                ],
                'icon'=>$icons[$i],
            ]);

            $product->file()->create(["url"=>$images[$i]]);
        }
    }
}
