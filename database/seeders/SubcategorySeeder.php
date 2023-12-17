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
            "trucks"
                    ];



        $title_ar = [
            "شاحنات"
                    ];  

                    $category_id=[5];


// TODO(ibrahim): add subcategories to other categories easy

        // $images = [
        //             // "images/KCm7skKln2yd0wGNPpPif634tvV2tzDChNOCoGYU.webp",
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,
                 
        //             ];

                   
        for ($i = 0; $i < count($title_ar); $i++) {
            

            $subcategory = Subcategory::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'category_id'=>$category_id[$i],
            ]);
            // $subcategory->file()->create(["url"=>$images[$i]]);
          
           
           
        }
    }
}
