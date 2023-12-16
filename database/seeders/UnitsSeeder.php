<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["سنوات الخبرة","مبيعات المنتجات","عملائنا"];
        $title_en = ["Business Years","Products Sales","Happy Customers"];



        $image=[
            "images/4UPrBifentc75n3x5k51RHFbze9NhzcFoVl0u4WO.svg",
            "images/KjmtwGFMoyOLxhlPUo8AOtHlPIRsjaX30mSJt8em.svg",
            "images/JWUBXqPMgUNwwVadtZJa7V3rCZJeJRdHR7OifOMA.svg",
        ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Unit_Translation = Unit::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
            ]);
            $Unit_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
