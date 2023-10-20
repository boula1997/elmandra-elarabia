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
                        // video games
                       "EA SPORTS FC 24 - PS5",
                        "EA SPORTS FC 24 - Arabic and English - PS5",
                        "GTA 5: Grand Theft Auto V - PS5",
                        "Marvel’s Spider Man: Miles Morales - PS5",
                        "Hogwarts Legacy - Arabic Edition - PS5",
                        // ps4 games
                        "Red Dead Redemption II (RDR2) - PS4",
                        "GTA 5 : Grand Theft Auto V Premium Edition - PS4",
                        "Marvel's Spider Man - English & Arabic - PS4",
                        "Fifa 23 - Arabic Edition - PS4",
                        "Minecraft: Starter Collection - PS4",
                        //  Nintendo Switch
                        "The Legend Of Zelda: Tears Of The Kingdom",
                        "Mario Kart 8 Deluxe ",
                        "Minecraft",
                        "Luigi’s Mansion 3",
                        "Sonic Frontiers",
                        //  XBOX Games
                        "Road Rage",
                        "Immortals Fenyx Rising",
                        "Battlefield 2042",
                        "GRID Legends",
                        "Street Fighter 6",
                        // pc games
                    ];

        $subtitle_en = [
                          // 
                          null,null,null,null,null,
                          // 
                          null,null,null,null,null,
                          // 
                          null,null,null,null,null,
                          // 
                          null,null,null,null,null,
                        
                       ];

        $description_en = [
                              // 
                              null,null,null,null,null,
                              // 
                              null,null,null,null,null,
                              // 
                              null,null,null,null,null,
                              // 
                              null,null,null,null,null,
                          ];

        $title_ar = [ 
                        // video games
                        "EA SPORTS FC 24 - PS5",
                        "EA SPORTS FC 24 - Arabic and English - PS5",
                        "جي تي ايه 5: جراند ثيفت أوتو V - بلاي ستيشن 5",
                        "مارفل سبايدر مان: مايلز موراليس - PS5",
                        "هوجورتس ليجاسي - النسخة العربية - PS5",
                          // ps4 games
                        "لعبة ريد ديد ريدمبشن II (RDR2) - بلاي ستيشن 4",
                        "لعبة جي تي ايه 5: جراند ثيفت أوتو V الإصدار المميز - بلاي ستيشن 4",
                        "لعبة Marvel's Spider Man - الإنجليزية والعربية - PS4",
                        "فيفا 23 - النسخة العربية - بلاي ستيشن 4",
                        "لعبة ماينكرافت: مجموعة المبتدئين - بلاي ستيشن 4",
                        //  Nintendo Switch
                        "أسطورة زيلدا: دموع المملكة",
                        "ماريو كارت 8 ديلوكس",
                        "ماينكرافت",
                        "قصر لويجي 3",
                        "سونيك فرونتيرز",
                        //  XBOX Games
                        "غضب الطريق",
                        "لعبة الخالدون فينيكس رايزينج",
                        "باتلفيلد 2042",
                        "GRID أساطير",
                        "ستريت فايتر 6",

                       
                    ];  

        $subtitle_ar = [
                         // 
                         null,null,null,null,null,
                         // 
                         null,null,null,null,null,
                        // 
                        null,null,null,null,null,
                        // 
                        null,null,null,null,null,
                       ];

        $description_ar = [
                            // 
                            null,null,null,null,null,
                            // 
                            null,null,null,null,null,
                            // 
                            null,null,null,null,null,
                             // 
                             null,null,null,null,null,
                          ];

        $images = [
                     // video games
                    "images/vzrjmBcs7nimr2pddHvVEPyJOkEgArO8OK89I3wG.webp",
                    "images/Vg6nCOARUk7wzGeUMfJXSPtjHFGiXQjlQuW3drtW.webp", 
                    "images/zbGHONWmG1S4GqCmhf3smQebv2GYFqEmJDJQHaYo.webp",
                    "images/GjqjTWFa0jEL7bb9aGYQZrm2Mavt1x97BvPx3O2W.webp",
                    "images/IpgSDM2sm46kQwPhbZrM3jn2fPIQBAT9liYlWmJH.webp",
                     // ps4 games
                    "images/OhGKhTQahok2kRIkjJusNKoTeWnU9WjwPPAOJzQy.webp",
                    "images/X8OgznIr5VQDAnxzvofdeLuTb74RZa9iH30e83XV.webp", 
                    "images/PgekJrispoAsM8IJLeU3sF8evbkU19Sl5rnvAMdI.webp",
                    "images/GjqjTWFa0jEL7bb9aGYQZrm2Mavt1x97BvPx3O2W.webp",
                    "images/N4HO5RF8YWJRhTMvzdG2Mdo7kqD9hHtvLMuBh2WY.webp",
                    //  Nintendo Switch
                    "images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp",
                    "images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp",
                    "images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp",
                    "images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp",
                    "images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp",
                     //  XBOX Games
                     "",
                     "",
                     "",
                     "",
                     "",
                  ];

        $icons= [ 
                      // 
                      null,null,null,null,null,
                      // 
                      null,null,null,null,null,
                      // 
                      null,null,null,null,null,
                       // 
                       null,null,null,null,null,
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
