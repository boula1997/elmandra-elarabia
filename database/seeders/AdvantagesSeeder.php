<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["خبرتنا","لاعبينا","ألعابنا","عملائنا"];
        $title_en = ["EXPERIENCE","OUR Gamers","Our Games","HAPPY CLIENTS"];
        $icon=["fa fa-star","fa fa-users","fa fa-check","fa fa-mug-hot"];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Advantage_Translation = Advantage::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
               'icon' => $icon[$i],
            ]);
        }
    }
}
