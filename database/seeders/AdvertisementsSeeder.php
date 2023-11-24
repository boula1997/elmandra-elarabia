<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertisementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["خبرتنا","لاعبينا","ألعابنا","عملائنا"];
        $title_en = ["EXPERIENCE","OUR Gamers","Our Games","HAPPY CLIENTS"];
        $count=['10','50',"150","1235"];
        $icon=["fa fa-star","fa fa-users","fa fa-check","fa fa-mug-hot"];
        $start_date=[null,null,null,null];
        $end_date=[null,null,null,null];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Advertisement_Translation = Advertisement::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
               'count'=>$count[$i],
               'icon' => $icon[$i],
               'start_date' => $start_date[$i],
               'end_date' => $end_date[$i],
            ]);
        }
    }
}
