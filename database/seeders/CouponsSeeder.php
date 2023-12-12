<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["تخفيض 30%","تخفيض","احصل على 3 ريال سعودى كاش باك! الحد الأدنى للطلب 30 دولارًا"];
        $title_en = ["30% Off","OFF","Get $3 Cashback! Min Order of $30",];

        $subtitle_ar = ["تخفيض 30%","تخفيض","احصل على 3 ريال سعودى كاش باك! الحد الأدنى للطلب 30 دولارًا"];
        $subtitle_en = ["30% Off","OFF","Get $3 Cashback! Min Order of $30",];
        
        $description_ar = ["أسرع","عرض خاص على هذا الخصم، أسرع!","عرض خاص على هذا الخصم، أسرع!"];
        $description_en = ["Special coupon on this discount, Hurry Up!","Special coupon on this discount, Hurry Up!","Special coupon on this discount, Hurry Up!"];
        
        $code = ["new2023","modern15","Get30"];
        
        $image=[
                   
                    "images/02zoDUov2wk3cHE7xGXazHKIXjtzaERpKaJkg3IJ.svg",
                    "images/zj067tBFtzuzbNiybnYAHTMCnpJabbkGnjMiFXQy.svg",
                    "images/JOWOwSYXuco9wRioVMlHdGXoqR1rWXdCwdSDIKM4.svg",
                ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Coupon_Translation = Coupon::create([
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
                'code'=> $code[$i],
            ]);
            $Coupon_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
