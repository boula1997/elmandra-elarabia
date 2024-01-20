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
                        // 1
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 2
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 3
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 4
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 5
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 6
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",

                    ];

        $title_ar = [
                        // 1
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 2
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 3
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 4
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 5
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 6
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                    ];  



        $images = [
                    // 1
                    "images/ARou8tIIuzh08flNJnYIlRnqrBXEM0T6F3feyV45.png",
                    "images/4bApu2W78pmZkK9FSgH4tcR1E5869sV7vCDbbcWP.png",
                    "images/UIbSco2ShVUVIhbGgqmS8AvAo7OBIMBId5xtTWf0.avif",
                    "images/IrmZfq1RrDHR9GZzjEo7fyVfdNb4oXddTPF7Jreo.png",
                    "images/o9kSYJLBcItMb7GxavR47OxShpm1VBY7VxzirEbg.png",
                    "images/8QjMfKGU9ligSjcJKZ0n5VQhSHAmX7wTaWEPrUrj.png",
                    // 2
                    "images/ARou8tIIuzh08flNJnYIlRnqrBXEM0T6F3feyV45.png",
                    "images/4bApu2W78pmZkK9FSgH4tcR1E5869sV7vCDbbcWP.png",
                    "images/UIbSco2ShVUVIhbGgqmS8AvAo7OBIMBId5xtTWf0.avif",
                    "images/IrmZfq1RrDHR9GZzjEo7fyVfdNb4oXddTPF7Jreo.png",
                    "images/o9kSYJLBcItMb7GxavR47OxShpm1VBY7VxzirEbg.png",
                    "images/8QjMfKGU9ligSjcJKZ0n5VQhSHAmX7wTaWEPrUrj.png",
                    // 3
                    "images/ARou8tIIuzh08flNJnYIlRnqrBXEM0T6F3feyV45.png",
                    "images/4bApu2W78pmZkK9FSgH4tcR1E5869sV7vCDbbcWP.png",
                    "images/UIbSco2ShVUVIhbGgqmS8AvAo7OBIMBId5xtTWf0.avif",
                    "images/IrmZfq1RrDHR9GZzjEo7fyVfdNb4oXddTPF7Jreo.png",
                    "images/o9kSYJLBcItMb7GxavR47OxShpm1VBY7VxzirEbg.png",
                    "images/8QjMfKGU9ligSjcJKZ0n5VQhSHAmX7wTaWEPrUrj.png",
                    // 4
                    "images/ARou8tIIuzh08flNJnYIlRnqrBXEM0T6F3feyV45.png",
                    "images/4bApu2W78pmZkK9FSgH4tcR1E5869sV7vCDbbcWP.png",
                    "images/UIbSco2ShVUVIhbGgqmS8AvAo7OBIMBId5xtTWf0.avif",
                    "images/IrmZfq1RrDHR9GZzjEo7fyVfdNb4oXddTPF7Jreo.png",
                    "images/o9kSYJLBcItMb7GxavR47OxShpm1VBY7VxzirEbg.png",
                    "images/8QjMfKGU9ligSjcJKZ0n5VQhSHAmX7wTaWEPrUrj.png",
                    // 5
                    "images/ARou8tIIuzh08flNJnYIlRnqrBXEM0T6F3feyV45.png",
                    "images/4bApu2W78pmZkK9FSgH4tcR1E5869sV7vCDbbcWP.png",
                    "images/UIbSco2ShVUVIhbGgqmS8AvAo7OBIMBId5xtTWf0.avif",
                    "images/IrmZfq1RrDHR9GZzjEo7fyVfdNb4oXddTPF7Jreo.png",
                    "images/o9kSYJLBcItMb7GxavR47OxShpm1VBY7VxzirEbg.png",
                    "images/8QjMfKGU9ligSjcJKZ0n5VQhSHAmX7wTaWEPrUrj.png",
                    // 6
                    "images/ARou8tIIuzh08flNJnYIlRnqrBXEM0T6F3feyV45.png",
                    "images/4bApu2W78pmZkK9FSgH4tcR1E5869sV7vCDbbcWP.png",
                    "images/UIbSco2ShVUVIhbGgqmS8AvAo7OBIMBId5xtTWf0.avif",
                    "images/IrmZfq1RrDHR9GZzjEo7fyVfdNb4oXddTPF7Jreo.png",
                    "images/o9kSYJLBcItMb7GxavR47OxShpm1VBY7VxzirEbg.png",
                    "images/8QjMfKGU9ligSjcJKZ0n5VQhSHAmX7wTaWEPrUrj.png",

                  
                    ];

                    $y=0;
        for ($i = 0; $i < count($title_ar); $i++) {
            if($i%6==0){
                $y++;
            }
            $category = Category::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'company_id'=>$y,
            ]);
            $category->file()->create(["url"=>$images[$i]]);
        }
    }
}