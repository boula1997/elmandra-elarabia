<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = [null];
        $title_en = [null];
        $subtitle_ar =[null];
        $subtitle_en = [null];
        $description_ar = [null];
        $description_en = [null];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Gallery = Gallery::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                ]
            ]);
        }
    }
}
