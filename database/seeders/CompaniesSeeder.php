<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanysSeeder extends Seeder
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
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Company_Translation = Company::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
               'count'=>$count[$i],
               'icon' => $icon[$i]
            ]);
        }
    }
}
