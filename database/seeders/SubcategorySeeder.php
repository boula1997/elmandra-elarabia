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
                        // Orderproduct Games
                        "PlayStation 5 Games",
                        "PlayStation 4 Games",
                        "Nintendo Games",
                        "XBOX Games",
                        "PC Games",
                        // Consoles & Hardware
                        "PlayStation 5 Consoles",
                        "PlayStation 4 Consoles",
                        "Nintendo Switch Consoles",
                        "XBOX Consoles",
                        "Virtual Reality VR",
                        // Accessories
                        "PlayStation 5 Accessories",
                        "PlayStation 4 Accessories",
                        "Nintendo Accessories",
                        "Controllers",
                        "Gaming Chairs",
                        // Pre Owned
                        "Used Consoles And Accessories",
                        "PlayStation 5 Used Games",
                        "PlayStation 4 Used Games",
                        "Nintendo Switch Used Games",
                        "XBOX Used Games",
                        // Others
                        "Funko Pop",
                        "Toys & Action Figures",
                        // Offers
                        "PS4",
                    ];



        $title_ar = [
                        //Orderproduct Games 
                        "العاب بلايستيشن 5",
                        "العاب بلايستيشن 4",
                        "العاب نينتندو",
                        "العاب اكس بوكس",
                        "العاب كمبيوتير",
                        // Consoles & Hardware
                        "أجهزة بلاي ستيشن 5",
                         "وحدات تحكم بلاي ستيشن 4",
                         "وحدات تحكم نينتندو سويتش",
                         "وحدات تحكم إكس بوكس",
                         "الواقع الافتراضي VR",
                        //  Accessories
                        "اكسسوارات بلاي ستيشن 5",
                         "اكسسوارات بلاي ستيشن 4",
                         "اكسسوارات نينتندو",
                         "وحدات التحكم",
                         "كراسي الألعاب",
                        //  Pre Owned
                        "أجهزة وإكسسوارات مستعملة",
                         " العاب بلاي ستيشن 5 المستعملة ",
                         " العاب بلاي ستيشن 4 المستعملة ",
                         "ألعاب نينتندو سويتش المستعملة",
                         "ألعاب إكس بوكس المستعملة",
                        //  Others
                        "فونكو بوب",
                        "الألعاب والشخصيات المتحركة", 
                        // Offers
                        "بلاي ستيشن 4",
                    ];  




        $images = [
                    // Orderproduct Games
                    // "images/40cfbdV2muONc4yQnTOM2j6Vj1r93LaF8xtPwuiR.jpg",
                    // "images/UkcojejGC3wZ9X6u0RToqPwkTO1a0VwDRclwjeuS.webp",
                    // "images/QzuqSxOzNJ65ZLCHOS1tTnT0e8gRE4UKel3YWSJ9.webp",
                    // "images/Ttbl438xdBhgWicmucZWI1tzJrOTBnCHtFmLT5SG.webp",
                    // "images/KCm7skKln2yd0wGNPpPif634tvV2tzDChNOCoGYU.webp",
                    null,null,null,null,null,
                    null,null,null,null,null,
                    null,null,null,null,null,
                    null,null,null,null,null,
                    null,null,null
                    ];


        for ($i = 0; $i < count($title_ar); $i++) {
            $subcategory = Subcategory::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'category_id'=>\random_int(1,5),
            ]);

            $subcategory->file()->create(["url"=>$images[$i]]);
        }
    }
}
