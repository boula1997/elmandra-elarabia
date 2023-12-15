<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["boula Nessim",
                     "ibrahim Samy",
                     "Gerges Makram",
                     "boula Nessim",
                     "ibrahim Samy",
                     "Gerges Makram",
                    ];

        $subtitle_en = ["Software Engineer",
                        "Software Engineer",
                        "Co Founder",
                        "Software Engineer",
                        "Software Engineer",
                        "Co Founder",];
        $description_en = [null,null,null,null,null,null,];
      
        $title_ar = ["بولا نسيم",
                     "ابراهيم سامى",
                     "جرجس مكرم",
                     "بولا نسيم",
                     "ابراهيم سامى",
                     "جرجس مكرم",
                    ];

        $subtitle_ar =["مهندس برمجة",
                       "مهندس برمجة",
                       "رئيس الادارة",
                       "مهندس برمجة",
                       "مهندس برمجة",
                       "رئيس الادارة",
                    ];
        $description_ar =  [null,null,null,null,null,null];

        $facebooks=["https://www.facebook.com",
                    "https://www.facebook.com",
                    "https://www.facebook.com",
                    "https://www.facebook.com",
                    "https://www.facebook.com",
                    "https://www.facebook.com",
                    ];
        $twitters=["https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                  ];
        $instagrams=["https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com",
                    ];

        $linkedins=["https://www.linkedin.com",
                    "https://www.linkedin.com",
                    "https://www.linkedin.com",
                    "https://www.linkedin.com",
                    "https://www.linkedin.com",
                    "https://www.linkedin.com",
                    ];

        $image=["images/ViwJYS4TckT5HGp8L1Qmnvrdn3XI3hVsGtNVU8eM.png",
                "images/ViwJYS4TckT5HGp8L1Qmnvrdn3XI3hVsGtNVU8eM.png",
                "images/ViwJYS4TckT5HGp8L1Qmnvrdn3XI3hVsGtNVU8eM.png",
                "images/ViwJYS4TckT5HGp8L1Qmnvrdn3XI3hVsGtNVU8eM.png",
                "images/ViwJYS4TckT5HGp8L1Qmnvrdn3XI3hVsGtNVU8eM.png",
                "images/ViwJYS4TckT5HGp8L1Qmnvrdn3XI3hVsGtNVU8eM.png",
            ];
       
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Team = Team::create([
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
                "facebook"=>$facebooks[$i],
                "twitter"=>$twitters[$i],
                "instagram"=>$instagrams[$i],
                "linkedin"=>$linkedins[$i],
            ]);
            $Team->file()->create(["url"=>$image[$i]]);
          }
    }
}
