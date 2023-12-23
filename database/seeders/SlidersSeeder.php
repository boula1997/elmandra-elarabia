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
        $title_en = ["Driving Excellence, Delivering Beyond",
                      "Moving Dreams, Delivering Success",
                      "Onward and Upward, On Every Road",
                    ];
        $title_ar = [
                       "قيادة التميز، تحقيق ما هو أبعد",
                        "تحريك الأحلام، تحقيق النجاح",
                        "إلى الأمام وإلى الأعلى، على كل طريق",
                   ];

        $subtitle_ar =[ "ميلك، ابتسامتنا: التميز في القيادة",
                        "الأميال المقبلة في كل حمولة",
                        "حيث تؤدي الطرق، نحن نوصل",
                     ];
                     $subtitle_en = ["Your Mile, Our Smile: Driving Excellence",
                                     "Miles Ahead in Every Load",
                                     "Where Roads Lead, We Deliver",
                        ];

        $description_ar =  [null,null,null];
        $description_en = [null,null,null];
      
        $image=[
                "images/cdryGvudn9xMIamy0KnEAIXdHbVn8vEoezFmGDMW.jpg",
                "images/p47SZc3Tzf8pMZJnFs8Y7iA3mQyrl56RiA5qNDSO.jpg",
                "images/687upvbceoYtDqzlG5i88B6xv5cPEFWfmq2LHW1Q.jpg",
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
