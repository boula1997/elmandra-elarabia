<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
                        "Video Games",
                        "PS4 Games",
                        "Nintendo Switch",
                        "XBOX Games",
                        "PC Games",
                    ];
        $subtitle_en = [null,null,null,null,null];
        $description_en = [ null,null,null,null,null ];

        $title_ar = [
                        "ألعاب الفيديو",
                        "العاب بلايستيشن 4",
                        "نينتندو سويتش",
                        "العاب اكس بوكس",
                        "العاب كمبيوتير",
                    ];  

        $subtitle_ar = [null,null,null,null,null];

        $description_ar = [null,null,null,null,null];

        $images = [
                    "images/40cfbdV2muONc4yQnTOM2j6Vj1r93LaF8xtPwuiR.jpg",
                    "images/UkcojejGC3wZ9X6u0RToqPwkTO1a0VwDRclwjeuS.webp",
                    "images/QzuqSxOzNJ65ZLCHOS1tTnT0e8gRE4UKel3YWSJ9.webp",
                    "images/Ttbl438xdBhgWicmucZWI1tzJrOTBnCHtFmLT5SG.webp",
                    "images/KCm7skKln2yd0wGNPpPif634tvV2tzDChNOCoGYU.webp",
                    ];

        $icons=[null,null,null,null,null];

        for ($i = 0; $i < count($title_ar); $i++) {
            $category = Category::create([
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

            $category->file()->create(["url"=>$images[$i]]);
        }
    }
}
