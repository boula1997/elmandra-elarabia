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
        $title_en = ["BEST GAMING CENTER",
                     "BEST GAMING SELLER",
                    //  "Proposal and Agreement",
                    //  "Executing and Delivering"
                    ];
        $subtitle_en = ["BUILD YOUR PLAYING LIFE STRONG WITH OUR GAMERS",
                        "GROW YOUR GAMING SKILLS WITH OUR CENTER",
                        // null,null
                    ];
        $description_en = [null,null,];

        $title_ar = [
                        "أفضل مركز ألعاب",
                        "أفضل بائع للألعاب",
                   ];

        $subtitle_ar =[ "قم ببناء حياتك اللعبية القوية مع لاعبينا",
                        "قم بتنمية مهاراتك في اللعب مع مركزنا",
                     ];

        $description_ar =  [null,null,];
      
        $image=["images/q0A3qkR6DDxUYOI3YupNE2I0zab1hYkrFNQvatIr.jpg",
                "images/avz6Q5p1NPGQBBZGUSZJF5JqxIDC6DoYPWxQakiL.jpg",
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
