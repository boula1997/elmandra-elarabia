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
                       "PES2017",
                        "PES2015",
                        "PES2016",
                    ];
        $subtitle_en = [
                        "kora1",
                        "kora2",
                        "kora3",
                        
                       ];
        $description_en = [
                           "subkora1",
                           "subkora2",
                           "subkora3",
                          ];

        $title_ar = [
                     "بيس2017",
                        "بيس2015",
                        "بيس2016",
                       
                    ];  

        $subtitle_ar = [

                       "كوره1",
                        "كوره2",
                        "كوره3",
                       ];

        $description_ar = [
                        "الديسكريبشن 1",
                            "الديسكريبشن 2",
                            "الديسكريبشن 3",
                          ];

        $images = [
                    null,
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
