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
            "Brake System Parts",
            "Suspension Components",
            "Lighting & Electrical",
            "Tires & Wheels",
            "Trailer Body Parts",
                    ];



        $title_ar = [
            "أجزاء نظام الفرامل",
            "مكونات التعليق",
            "الإضاءة والكهرباء",
            "الإطارات والعجلات",
            "أجزاء هيكل المقطورة",
                    ];  

                    $category_id=18;


// TODO(ibrahim): add subcategories to other categories easy

        $images = [
                    // "images/f2wiKkuDjDGHtiAZvgBz4KtITueRGd4aZsA6zkin.jpg",
                    // "images/4KWsSbCvhWtd5lCeCY0zWOTjqkB2gXqyClEOo5xF.jpg",
                    // "images/eImGahUtGberjGwXJJUjdZw1jnghl1aOfNDqWoH5.jpg",
                    // "images/WWfFAMUkX3T5oevRHJXGv0o9B0POnelNyuFl4rsq.jpg",
                    // "images/ghddBqq2iCrJlndwwwuO8wCyR3nnWR53qSj6qgC0.webp",
                    // "images/4gCtq2C0VrqKqWdG0nH3AWbUwHns1GDdiZKRX76W.jpg",
                    ];

                   
        for ($i = 0; $i < count($title_ar); $i++) {
            

            $subcategory = Subcategory::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'category_id'=>$category_id,
            ]);
            // $subcategory->file()->create(["url"=>$images[$i]]);  
           
        }
    }
}