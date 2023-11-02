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
        $title_en = ["Level Up Your Gaming Experience!",
                     "Level Up Your Gaming Experience!",
                    //  "Proposal and Agreement",
                    //  "Executing and Delivering"
                    ];
        $subtitle_en = ["BUILD YOUR PLAYING LIFE WITH US",
                        "GROW YOUR GAMING SKILLS WITH US",
                        // null,null
                    ];
        $description_en = [null,null,];

        $title_ar = [
                        "قم ببناء حياة اللعب الخاصة بك معنا",
                        "ارفع مستوى تجربة الألعاب الخاصة بك!",
                   ];

        $subtitle_ar =[ "قم ببناء حياة اللعب الخاصة بك معنا",
                        "قم بتنمية مهاراتك في اللعب معنا",
                     ];

        $description_ar =  [null,null,];
      
        $image=["images/FHCziEMVj7afQLZkRaz1gLPv5LOP2yig79P6Ulke.jpg",
                "images/ZkZhIoYrKq9kYBuULHrKnejt3V4iUF2Z9Ifav17f.jpg",
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
