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

        $title_ar = [
                    "الموثوقية والمتانة",
                    "التنوع والكفاءة",
                    "السلامة والأمن",
                    "التخصيص والمرونة",
                ];

        $title_en = [
                    "Reliability & Durability",
                    "Versatility & Efficiency",
                    "Safety & Security",
                    "Customization & Flexibility"
                ];
       $image=[
                "images/WpyMZPfr4Jmd2jjLRedQkBhnDkF2usey1R91c7JE.jpg",
                "images/hq5uWMiKLxENuRtj4nKw9J76O6w4cr4D8iT5yKnA.png",
                "images/A6QcLBOoIHmoyRMLjbXLfGvMibmh7zvNkw5cU5lW.webp",
                "images/SBtXJjGELtSQOA7DZ8qVJbt9f7DLp5ozZP7kJLu4.png",
            ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Advantage_Translation = Advantage::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
            ]);
            $Advantage_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
