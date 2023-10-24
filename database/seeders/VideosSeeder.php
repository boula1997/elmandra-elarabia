<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $title_ar = [null];
        $title_en = [null];
        $youtube_link = [null];
    
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Video = Video::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'youtube_link' => $youtube_link[$i],
            ]);
          
          }
    }
}
