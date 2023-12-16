<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**s
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
                        // video Games
                        "PlayStation 5 Games",
                        "PlayStation 4 Games",
                        "Nintendo Games",
                        "XBOX Games",
                        "PC Games",
                        "Pre-Owned Games", // new
                        // Consoles & Hardware
                        "PlayStation 5 Consoles",
                        "PlayStation 4 Consoles",
                        "Nintendo Switch Consoles",
                        "XBOX Consoles",
                        "Virtual Reality VR",
                        "Pre-Owned", // new
                        // Accessories
                        "PlayStation 5 Accessories",
                        "PlayStation 4 Accessories",
                        "Nintendo Accessories",
                        "Xbox Accessories",
                        "Controllers",
                        "Gaming Chairs",
                        // Pre Owned
                        "Used Consoles And Accessories",
                        "PlayStation 5 Used Games",
                        "PlayStation 4 Used Games",
                        "Nintendo Switch Used Games",
                        "XBOX Used Games",
                        // Toys & Collectibles
                        "Funko Pop",
                        "Blocks & Building Sets",
                        "Puzzles",
                        "RC & Diecast Cars",
                        // Others
                       
                        // Offers
                       
                    ];



        $title_ar = [
                        //video Games 
                        "العاب بلاي ستيشن 5",
                        "العاب بلاي ستيشن 4",
                        "العاب النينتندوا",
                        "العاب اكس بوكس",
                        "العاب للحاسب (كمبيوتر)",
                        "مستعمل", // new
                        // Consoles & Hardware
                        "أجهزة بلاي ستيشن 5",
                         "أجهزة بلاي ستيشن 4",
                         "أجهزة نينتندوا سويتش",
                         "أجهزة اكس بوكس",
                         "الواقع الافتراضي (VR)",
                         "مستعمل", // new
                        //  Accessories
                        "اكسسوارات بلاي ستيشن 5",
                         "اكسسوارات بلاي ستيشن 4",
                         "اكسسوارات نينتندوا",
                         "اكسسوارات الاكس بوكس",
                         "وحدات التحكم",
                         "كراسي الألعاب",
                        //  Pre Owned
                        "اجهزه وملحقات مستعمله",
                         "العاب بلاي ستيشن 5 مستعمله",
                         "العاب بلاي ستيشن 4 مستعمله)",
                         "العاب نينتندوا مستعمله",
                         "ألعاب إكس بوكس مستعمله",

                        // Toys & Collectibles
                        "فانكو بوب",
                        "مكعبات والعاب بناء",
                        "بازل - العاب الصور المقطوعة",
                        "سيارات Diecast و RC",
                        //  Others
                        // Offers
                      
                    ];  




        $images = [
                    // Orderproduct Games
                    // "images/40cfbdV2muONc4yQnTOM2j6Vj1r93LaF8xtPwuiR.jpg",
                    // "images/UkcojejGC3wZ9X6u0RToqPwkTO1a0VwDRclwjeuS.webp",
                    // "images/QzuqSxOzNJ65ZLCHOS1tTnT0e8gRE4UKel3YWSJ9.webp",
                    // "images/Ttbl438xdBhgWicmucZWI1tzJrOTBnCHtFmLT5SG.webp",
                    // "images/KCm7skKln2yd0wGNPpPif634tvV2tzDChNOCoGYU.webp",
                    null,null,null,null,null,null,
                    null,null,null,null,null,null,
                    null,null,null,null,null,null,
                    null,null,null,null,null,
                    null,null,null,null
                    ];

                  $y=0;
        for ($i = 0; $i < count($title_ar); $i++) {
            if($i%6==0)
            { 
                $y++;
            }
                
            $subcategory = Subcategory::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'category_id'=>$y,
            ]);
            $subcategory->file()->create(["url"=>$images[$i]]);
        }
    }
}
