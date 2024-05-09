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
                        "RENAULT C 520 DTI13 6X4 287 TKM",
                        "DAF XF 460 SSC PTO+HYDR. 2S",
                        "DAF XF 480 6X2 FTG ALCOA'S",
                        "M.A.N. 18.460 TGX XLX,Standklima",
                        "M.A.N. 12.250 TGL",
                        "RENAULT T 480",
                        "DAF LF 45.130",
                        "VOLVO FH 500 8X4 TRIDEM HOOKLIFT",
                        "IVECO AD340T45 TRAKKER 8X4 TIPPER COMBI",
                        "SCANIA P450",
                    ];



        $title_ar = [
            "رينو سي 520 DTI13 6X4 287 TKM",
            "داف XF 460 SSC PTO+HYDR.2S",
            "داف XF 480 6X2 FTG ALCOA'S",
            "M. A.N. 18.460 TGX XLX، ستاندكليما",
            "مان 12.250 تي جي إل",
            "رينو تي 480",
            "داف إل إف 45.130",
            "فولفو FH 500 8X4 ترايديم هوكليفت",
            "ايفيكو AD340T45 تراكر 8X4 تيبر كومبي",
            "سكانيا بي 450",

                    ];  




        $images = [
                       [ "images/7CzapEFYzk8hZLNXPXyHoY1KPb3h2MEQVndJ9I7T.jpg","images/3lu5xyBjdXLPmH7i5BrSLurgPnO3eaaFJ4JzqiFS.jpg"],
                       [ "images/3lu5xyBjdXLPmH7i5BrSLurgPnO3eaaFJ4JzqiFS.jpg"],
                       [ "images/QGoTeufhCJLyaypQmH2XfoLmFc76mRVOasKh5ThK.jpg"],
                       [ "images/D0cYjhqSZxNlkoxaIEpYd8oYaBDNfaoI15lO0noq.jpg"],
                       [ "images/hMDnuDuXdynbNwcZIZJQVObbDdbaPciJGq0clZyC.jpg"],
                       [ "images/YWTNHoHqDKCNx7TIu372sjeWa03yvvQ4B62DCKjY.jpg"],
                       [ "images/Ob8dMmt9Ba0RI1dU3DLukuC8l5tlDGtoTOS1gNcD.jpg"],
                       [ "images/ziGbQ3lA7vf92TtH5Pa1DAw8yyFrekTt99xue74x.jpg"],
                       [ "images/usXzQ2TvNkHxBqOCRnL7Rkiy2D5Kzy3LkQyQ6X4e.jpg"],
                       [ "images/qVTmfFpnQvrjDn7CsLZlMFJXMqfjUFrGSH3prrWG.jpg"],
                  ];

        $single_image = [
            "images/7CzapEFYzk8hZLNXPXyHoY1KPb3h2MEQVndJ9I7T.jpg",
             "images/3lu5xyBjdXLPmH7i5BrSLurgPnO3eaaFJ4JzqiFS.jpg",
             "images/QGoTeufhCJLyaypQmH2XfoLmFc76mRVOasKh5ThK.jpg",
             "images/D0cYjhqSZxNlkoxaIEpYd8oYaBDNfaoI15lO0noq.jpg",
             "images/hMDnuDuXdynbNwcZIZJQVObbDdbaPciJGq0clZyC.jpg",
             "images/YWTNHoHqDKCNx7TIu372sjeWa03yvvQ4B62DCKjY.jpg",
             "images/Ob8dMmt9Ba0RI1dU3DLukuC8l5tlDGtoTOS1gNcD.jpg",
             "images/ziGbQ3lA7vf92TtH5Pa1DAw8yyFrekTt99xue74x.jpg",
             "images/usXzQ2TvNkHxBqOCRnL7Rkiy2D5Kzy3LkQyQ6X4e.jpg",
             "images/qVTmfFpnQvrjDn7CsLZlMFJXMqfjUFrGSH3prrWG.jpg",
];
                
                  
        $number=   [306098,306331,306332,305866,306098,306331,306332,305866,306332,305866,];
        $prices=   [55950,33900,28950,55950,33900,28950,55950,33900,28950,23950];
        $manYear=   ["2018-4-12","2021-12-13","2022-1-13","2022-7-3","2018-4-12","2021-12-13","2022-1-13","2022-7-3","2018-4-12","2021-12-13",];

        $gearBox=   ["Automatic","Automatic","Automatic","Automatic","Automatic","Automatic","Automatic","Automatic","Automatic","Automatic",];
        $mileAge=   [286.093,332.447,357,286.093,332.447,357,286.093,332.447,357,286.093,];
        $axelsNumber=   [70,90,100,50,80,70,90,100,50,80,];

    
        $configuration=   ["6*4","6*4","6*4","6*4","6*4","6*4","6*4","6*4","6*4","6*4",];
        $kind=   ["Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit","Tractor unit",];


        $engineCapacity=   ["247 HP","247 HP","247 HP","247 HP","247 HP","247 HP","247 HP","247 HP","247 HP","247 HP",];
        $suspensionType=   [                
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            "full air suspension",
                            ];
                
        for ($i = 0; $i < count($title_ar); $i++) {

            $product = Product::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => "تمثل مجموعة FAW أكثر من 60 عامًا من الخبرة في تصنيع الشاحنات، حيث تتضمن مجموعة J6P من شاحنات الطرق السريعة والشاحنات المهنية مستويات عالية من الابتكار والموثوقية والراحة وسهولة القيادة التي جعلت من FAW اسمًا راسخًا في صناعة الشاحنات الثقيلة من أجل التشغيل الإنتاجي والفعال من حيث التكلفة. . توفر J6P راحة وتصميمًا على مستوى عالمي جنبًا إلى جنب مع محركات متقدمة ذات قدرة حصانية عالية وفعالة في استهلاك الوقود، وتنقل هندسة الشاحنات الثقيلة إلى مستوى جديد، مما يوفر إنتاجية مثالية بأقل تكلفة تشغيل ممكنة. تتوفر J6P بتشكيلات 4x2، و6x2 (محور الرفع الأوسط أو المحور)، و6x4، و8x4 مع محركات رأسية متقدمة ذات 4 صمامات تصل قوتها إلى 500 حصان، وهي منافس جديد جدي على الساحة العالمية في قطاع الشاحنات الفاخرة.",
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => "Representing FAW's 60 plus years of truck manufacturing experience, our J6P range of on-highway and vocational trucks incorporates the high levels of innovation, reliability, comfort and driveability that have made FAW an established name in the heavy truck industry for productive and cost effective operation. Offering world class comfort and styling combined with advanced fuel-efficient high horsepower engines, the J6P takes heavy truck engineering to a new level, providing optimum productivity at the lowest possible operating cost. Available in 4x2, 6x2 (mid-lift or tag axle), 6x4 and 8x4 configurations with advanced 4-valve head engines up to 500 horsepower, the J6P is a serious new contender on the global stage in the premium truck segment.",

                ],
                'category_id'=>rand(1,36),
                'company_id'=>rand(1,6),
                'price'=>$prices[$i],
                'kind'=>$kind[$i],
                'engineCapacity'=>$engineCapacity[$i],
                'suspensionType'=>$suspensionType[$i],
                // 'manYear'=>$manYear[$i],
                'mileAge'=>$mileAge[$i],
                'configuration'=>$configuration[$i],
                'gearBox'=>$gearBox[$i],
                'axelsNumber'=>$axelsNumber[$i],
                'number'=>$number[$i],

            ]);

            $product->file()->create(["url"=>$single_image[$i]]);
            
            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $product->file()->create(["url"=>$image]);
        }
    }
}
