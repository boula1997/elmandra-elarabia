<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["الشاحنات العاملة","سنوات من الخدمة الموثوقة","سجل التسليم في الوقت المحدد","معدل رضا العملاء"];
       
        $title_en = ["Trucks in Operation","Years of Reliable Service","On-Time Delivery Record","Customer Satisfaction Rate"];
      
        $count=['500','20',"95","98",];
        $icon=["fas fa-cloud-download-alt","fas fa-pen","fas fa-window-restore",
                "fas fa-check","fas fa-shopping-cart","fas fa-truck",];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Counter_Translation = Counter::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
               'count'=>$count[$i],
               'icon' => $icon[$i]
            ]);
        }
    }
}
