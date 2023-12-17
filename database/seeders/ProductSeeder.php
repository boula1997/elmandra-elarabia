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




        $images = [
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
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'category_id'=>1,
                'price'=>$prices[$i],
                'kind'=>$kind[$i],
                'engineCapacity'=>$engineCapacity[$i],
                'suspensionType'=>$suspensionType[$i],
                'manYear'=>$manYear[$i],
                'mileAge'=>$mileAge[$i],
                'configuration'=>$configuration[$i],
                'gearBox'=>$gearBox[$i],
                'axelsNumber'=>$axelsNumber[$i],
                'number'=>$number[$i],

            ]);

            $product->file()->create(["url"=>$images[$i]]);
        }
    }
}
