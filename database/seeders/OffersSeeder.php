<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["تخفيض 30%","تخفيض","احصل على 3 دولارات كاش باك! الحد الأدنى للطلب 30 دولارًا","عروض خاصة"];
        $title_en = ["30% Off","OFF","Get $3 Cashback! Min Order of $30","Special Offers "];

        $description_ar = ["أسرع","عرض خاص على هذا الخصم، أسرع!",null,"عرض خاص على هذا الخصم، أسرع!"];
        $description_en = ["Special offer on this discount, Hurry Up!","Special offer on this discount, Hurry Up!",null,"Special offer on this discount, Hurry Up!"];

        $image=[
                   
                    "images/XJur2tRb3uXS8qWmkgSbuAJBUcgotx3dltGhcuQz.jpg",
                    "images/rb4oTFL1D3Z8qONhw7PhdIdXrbXnOh6pbX0PZDkr.jpg",
                    "images/XJur2tRb3uXS8qWmkgSbuAJBUcgotx3dltGhcuQz.jpg",
                    "images/rb4oTFL1D3Z8qONhw7PhdIdXrbXnOh6pbX0PZDkr.jpg",
                ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Offer_Translation = Offer::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
            ]);
            $Offer_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
