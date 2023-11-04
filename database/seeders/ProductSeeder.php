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
                        // Video games
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
                        //  pc games
                        "Heart Of The Elder Tree",
                        "Golfie",
                        "To Be or Not To Be",
                        "Goblin Scourge!",
                        "Super Bullet Break",
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
                              // 
                              null,null,null,null,null,
                          ];

        $title_ar = [ 
                        // Video games
                        "اي ايه سبورتس اف سي 24 - بلايستيشن 5",
                        "اي ايه سبورتس اف سي 24 - عربي وإنجليزي - بلايستيشن 5",
                        " جي تي ايه: جراند ثيفت اوتو 5 - بلايستيشن 5",
                        "مارفيل سبايدر مان مايلز موراليس - بلايسيتشن 5",
                        "هوجورتس ليجاسي - بلايستيشن 5",
                          // ps4 games
                        "ريد ديد ريدمشن 2 - بلاي ستيشن 4",
                        "جي تي ايه 5: جراند ثيفت اوتو v بريميم اديشن - بلايستيشن 4",
                        "مارفل سبايدرمان - نسخة (عربيية و انجليزية) - بلايستيشن 4",
                        "فيفا 23 - إصدار ستاندرد - بلاي ستيشن 4",
                        "ماين كرافت: ستارتر كولكشن - بلاي ستيشن 4",
                        //  Nintendo Switch
                        "ذا ليجيند أوف زيلدا: تيرز أوف ذا كينجدوم - نينتندو سويتش",
                        "ماريو كارت 8 ديلوكس نينتندو سويتش",
                        "ماين كرافت نينتندو سويتش",
                        "لويجيز مانشن 3 - نينتندو سويتش",
                        "سونيك فرونتيرز - نينتندو سويتش",
                        //  XBOX Games
                        "رود ريج - اكس بوكس وان",
                        "امورتالز فينكس رايزنج - إكس بوكس",
                        "باتل فيلد 2042 - أكس بوكس أكس",
                        "جريد ليجاندس - اكس بوكس",
                        "ستريت فايتر 6 - إكس بوكس سيريس إكس",
                        //  pc games
                        "قلب الشجرة الكبيرة",
                        "جولفى",
                        "أكون أو لا أكون",
                        "آفة عفريت!",
                        "سوبر بوليت بريك",

                       
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
                             // 
                            null,null,null,null,null,
                          ];

        $images = [
                     // orderproduct games
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
                    "images/k4BX1gPviTfr4NVf5kP0mJEgd9OQ6FX94pzqHvBm.webp",
                    "images/IeO0odnmlezdvshmgDwU6R2CA7uN9ckyYDoEza2J.webp",
                    "images/2LB6URqlZfDx9vxSomXW6H6sc6P3bUJROERwCgC9.webp",
                    "images/dpPuKRH2vl6Buk68cBRmVe8VxQJRXTPQKjKY4Zzl.webp",
                    "images/CrZpIE7ru5yFcQTBJdNoDJVybBv9FMikPOZjudz0.webp",
                     //  XBOX Games
                     "images/yE3frI4HWh3zg3FXwWqxMziYtIOhtfwTm2hq34QN.webp",
                     "images/A0LGvNFJYCRijg1pNJ5mmXKsx9WEqgx03gmDrue9.webp",
                     "images/nSrHaNaZaQeKzIkdIJJ1tAl1SND8PrJ9uTf1ZJTz.webp",
                     "images/SJeFGOTaNOX99aKTyGLdpPtGr9AZa2dgMi3zWaAz.webp",
                     "images/2HV8b69Pw3XWfYNT7U2FFfVKk2dYwoRCQ1I0lAZw.webp",
                    //  pc games
                    "images/et5YKIfNAERC49pjRKHHnHCS5RzqgbU2IWeCMTOP.webp",
                    "images/ZycsyDTpjX4TeeCdgp39aZwmgYd6odWMtVieWuhr.webp",
                    "images/2auN5zHOdYCL5crO4M8Ezcd80QeofUCkmFA60CIn.webp",
                    "images/MLK4qmXGnMDqpV2TJZSSixY6xvShdOwE2BtUukGa.webp",
                    "images/JrglxnhfyOip8tybvxJ63g1xxXuBjGJbAeuGpT5J.webp",

                  ];


                $prices=[100,200,300,700,500,100,200,300,700,500,100,200,300,700,500,100,200,300,700,500,100,200,300,700,500,];
                $prices_bd=[150,250,350,750,550,150,250,350,750,550,150,250,350,750,550,150,250,350,750,550,150,250,350,750,550,];
                $stock=[100,30,70,40,80,100,30,70,40,80,100,30,70,40,80,100,30,70,40,80,100,30,70,40,80,];

        for ($i = 0; $i < count($title_ar); $i++) {
            $product = Product::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
                'subcategory_id'=>\random_int(1,7),
                'price'=>$prices[$i],
                'price_bd'=>$prices_bd[$i],
                'stock'=>$stock[$i],

            ]);

            $product->file()->create(["url"=>$images[$i]]);
        }
    }
}
