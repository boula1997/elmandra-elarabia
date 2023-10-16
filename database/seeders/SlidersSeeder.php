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
        $title_en = ["Take The Best Quality Dental Treatment",
                     "Take The Best Treatment",
                    //  "Proposal and Agreement",
                    //  "Executing and Delivering"
                    ];
        $subtitle_en = ["KEEP YOUR LIFE HEALTHY","KEEP YOUR FAMILY HEALTHY",
                        // null,null
                    ];
        $description_en = [null,null,];

        $title_ar = ["احصل على أفضل علاج للأسنان",
                     "تناول أفضل علاج", 
                   ];

        $subtitle_ar =["حافظ على حياتك صحية","حافظ على صحة عائلتك"];

        $description_ar =  [null,null,];
      
        $image=["images/uYZXT0Ymuoci6lfFwPgpNlSA1wai4x1jgNMhCKSh.jpg",
                "images/jzyrEbCHwylCO73G6iByaUkx8AYFcExKN7ZSAnjy.jpg",
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
