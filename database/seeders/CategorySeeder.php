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
                        // "PS4 Games",
                        // "Nintendo Switch",
                        // "XBOX Games",
                        // "PC Games",
                        // new 
                        "Consoles & Hardware",
                        "Accessories",
                        "Pre Owned",
                        // "Digital Products",
                        "Others",
                        "Offers",
                    ];

        $title_ar = [
                        "ألعاب",
                        // "العاب بلايستيشن 4",
                        // "نينتندو سويتش",
                        // "العاب اكس بوكس",
                        // "العاب كمبيوتير",
                        // new
                        "أجهزة الألعاب",
                        "اكسسوارات",
                        "مستعمل",
                        // "المنتجات الرقمية",
                        "منتجات أخرى",
                        "العروض",
                    ];  



        $images = [
                    "images/40cfbdV2muONc4yQnTOM2j6Vj1r93LaF8xtPwuiR.jpg",
                    // "images/UkcojejGC3wZ9X6u0RToqPwkTO1a0VwDRclwjeuS.webp",
                    // "images/QzuqSxOzNJ65ZLCHOS1tTnT0e8gRE4UKel3YWSJ9.webp",
                    // "images/Ttbl438xdBhgWicmucZWI1tzJrOTBnCHtFmLT5SG.webp",
                    // "images/KCm7skKln2yd0wGNPpPif634tvV2tzDChNOCoGYU.webp",
                    // 
                    "images/KzPsjVjmV1cqwSfI3jGAEX7xIwkaaIELyd84kLW5.webp",
                    "images/mVOcUrWdGH1Pnn36zwTWcgKyuqfe5qCugDtDgQwM.webp",
                    "images/EidvJDSPrKwzkb2JOnbZ6PmbPNQ3R2RfHAWtNHjM.webp",
                    // "images/ULpxMEeY6vo7XRlkO5Ki4ZYYyUUTzHD0VRrkJH3q.webp",
                    "images/ffnJ3QBxG3aL7Y1JxwXTEHaCimitGQIj8YCbpc0k.webp",
                    "images/8nljzVfkdhbm5xN5YtRgYtIUZ5hv8q9ZSy9XDc5P.webp",
                    ];


        for ($i = 0; $i < count($title_ar); $i++) {
            $category = Category::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
            ]);

            $category->file()->create(["url"=>$images[$i]]);
        }
    }
}
