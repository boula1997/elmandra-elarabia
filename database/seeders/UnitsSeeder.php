<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["كرتونة قارورة","لتر عبوة","كجم"];
        $title_en = ["Business Years","Products Sales","Happy Customers"];




      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Unit_Translation = Unit::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
            ]);
        }
    }
}
