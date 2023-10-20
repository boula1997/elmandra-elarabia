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
                        "PlayStation 2",
                        "FIFA 23",
                        "PlayStation 3",
                        "Gift Card",
                        "Nintendo Blue/Yellow",
                    ];

        $subtitle_en = [
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                        
                       ];

        $description_en = [
                            null,
                            null,
                            null,
                            null,
                            null,
                            null,
                          ];

        $title_ar = [
                        "فيفا 24",
                        "جهاز بلايستيشن 2",
                        "فيفا 23",
                        "جهاز بلايستيشن 3",
                        "بطاقة هدايا",
                        "نينتندو أزرق/أصفر",
                       
                    ];  

        $subtitle_ar = [
                        null,
                        null,
                        null,
                        null,
                        null,
                        null,
                       ];

        $description_ar = [
                            null,
                            null,
                            null,
                            null,
                            null,
                            null,
                          ];

        $images = [
                    "images/ht14HpBz9XFtSQzjwfGuouYlvbqRAzqZR0tDMVR5.jpg",
                    "images/3Duu5ks4Vxez9Y3tMLnBZnAYiEt30jUYCRXagolY.jpg", 
                    "images/SwdknVPVhea8hoOG1uRHeWoYsz1EwokGWWpp8owz.jpg",
                    "images/1BytwxCRbXcr7j8gB48wakyDTOEQhSP0QdBjUsX5.jpg",
                    "images/QepE6wr0oSqEYK5gPtgnptPYHINvxWI3HnHpas9t.jpg",
                    "images/qXwWEpir5vw1zIzVeriqITkpDjc7cnjqccUhtcgh.jpg",
                  ];

        $icons= [ 
                    null,
                    null,
                    null,
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
