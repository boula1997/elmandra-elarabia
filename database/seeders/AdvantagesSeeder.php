<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $title_ar = [
                    "كل المنتجات المذهلة",
                    "توصيل مجاني للطلبات التي تزيد عن 50",
                    "الخصومات الكبرى اليومية",
                    "أفضل الأسعار في السوق"];

        $title_en = [
                    "Every Amazing Products",
                    "Free Delivery For Order Over 50",
                    "Daily Mega Discounts",
                    "Best Price On The Market"];
       $image=[
                "images/qGDvh5RwLxxMxLHTFWifhiaPORWiTwpHzIXOYLzu.svg",
                "images/NkLFFDhwBR1ZLZhBc7iQIAFl8puRtRjxJDGbI1zo.svg",
                "images/QvS8l6iB5fHENFPGjytIgYS8oaN7CRG1rj81QM4w.svg",
                "images/IzDM3TmrhlquOlKULgO3CRFrYftVmZeSsFGAP7VP.svg",
            ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Advantage_Translation = Advantage::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
            ]);
            $Advantage_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
