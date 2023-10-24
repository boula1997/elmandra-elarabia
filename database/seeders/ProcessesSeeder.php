<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [null];
        $subtitle_en = [null];
        $description_en = [null];

        $title_ar = [null];
        $subtitle_ar =[null];

        $description_ar =  [null];
      
        $image=[];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Process = Process::create([
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
            ]);
     }
    }
}
