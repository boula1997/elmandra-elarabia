<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;



class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $title_en = [null];
        $description_en = [null];
        $title_ar = [null ];
        $description_ar = [null];

        $image=[];
        
        for ($i = 0; $i < count($title_ar); $i++) {
            $FaqTranslation = Faq::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                  
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
            ]);
        }
    }
}
