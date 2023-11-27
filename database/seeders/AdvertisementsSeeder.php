<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvertisementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["تخفيض 30%","تخفيض","احصل على 3 دولارات كاش باك! الحد الأدنى للطلب 30 دولارًا","عروض خاصة"];
        $title_en = ["30% Off","OFF","Get $3 Cashback! Min Order of $30","Special Offers "];

        $subtitle_ar = ["عرض حصري","45%",null,"لهذا الأسبوع!"];
        $subtitle_en = ["Exclusive offer","45%",null,"of the week!"];

        $description_ar = [null,null,null,"عرض خاص على هذا الخصم، أسرع!"];
        $description_en = [null,null,null,"Special offer on this discount, Hurry Up!"];

        $start_date=[null,null,null,"2023-11-01 00:00:00"];
        $end_date=[null,null,null,"2023-11-30 06:35:00"];
        $code=[null,null,"GROCERY1920",null];
        $image=[
                    null,
                    null,
                    "images/XJur2tRb3uXS8qWmkgSbuAJBUcgotx3dltGhcuQz.jpg",
                    "images/rb4oTFL1D3Z8qONhw7PhdIdXrbXnOh6pbX0PZDkr.jpg",
                ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Advertisement_Translation = Advertisement::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                    'description' => $description_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'subtitle' => $subtitle_en[$i],
                    'description' => $description_en[$i],
                ],
               'code' => $code[$i],
               'start_date' => $start_date[$i],
               'end_date' => $end_date[$i],
            ]);
            $Advertisement_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
