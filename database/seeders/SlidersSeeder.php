<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["STAY HOME & DELIVERED YOUR",
                     "Your One-Stop Grocery Destination",
                     "Fresh Choices, Every Aisle, Every Day",
                    ];
        $title_ar = [
                        "ابق في المنزل & قم بتوصيل طلبك",
                        "وجهتك الشاملة لشراء البقالة",
                        "خيارات جديدة، في كل ممر، كل يوم",
                   ];

        $subtitle_ar =[ "الاحتياجات اليومية",
                        "طعام طازج، عائلات سعيدة",
                        "السوق الطازجة في منطقتك",
                     ];
                     $subtitle_en = ["DAILY NEEDS",
                                     "Fresh Food, Happy Families",
                                     "Your Neighborhood's Fresh Market",
                        ];

        $description_ar =  [null,null,null];
        $description_en = [null,null,null];
      
        $image=["images/rb4oTFL1D3Z8qONhw7PhdIdXrbXnOh6pbX0PZDkr.jpg",
                "images/0g7IJLg63Nydimuc64Tf8MP1MXk5LGXIntnrMdS8.webp",
                "images/0GDQsQJRxQfVjqyHuZyXhql81eLGeNi714JuDeY4.webp",
              ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $slider = Slider::create([
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
            ]);
            $slider->file()->create(["url"=>$image[$i]]);
     }
    }
}
