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
        $title_en = ["Boula Nessim",
                     "Ibrahim Samy",
                     "Gerges Makram"];

        $subtitle_en = ["Software Engineer",
                        "Software Engineer",
                        "Manager"];
        $description_en = [null,null,null,];
      
        $title_ar = ["بولا نسيم",
                     "ابراهيم سامى",
                     "جرجس مكرم"];

        $subtitle_ar =["مهندس برمجيات",
                       "مهندس برمجيات",
                        "مدير"];
        $description_ar =  [null,null,null];

        $facebooks=["https://www.facebook.com",
                    "https://www.facebook.com",
                    "https://www.facebook.com"
                    ];
        $twitters=["https://www.twitter.com",
                    "https://www.twitter.com",
                    "https://www.twitter.com"
                  ];
        $instagrams=["https://www.instagram.com",
                    "https://www.instagram.com",
                    "https://www.instagram.com"
                    ];

        $linkedins=["https://www.linkedin.com",
                    "https://www.linkedin.com",
                    "https://www.linkedin.com"
                    ];

        $image=["images/YE92B4LXiM6QhFcQbr5YKECGaMU5k8NokXve9o1m.jpg",
                "images/YQXLPLiQgi8H1E9YE77J3lwUX0qSOYXkHMP192Nz.png",
                // "images/pekmLKsEWdfVwDSwbG0sSIZARXfO8GavZPaoOF1D.jpg",
                // "images/tAgfJG0vAJHhQsCii9FR441z6tGs9fyGKj92MUzy.jpg",
                "images/pekmLKsEWdfVwDSwbG0sSIZARXfO8GavZPaoOF1D.jpg"];
       
       

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
