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
        $title_ar = ["حمل التطبيق","سجل بياناتك","تصفح المنتجات",
        "إختر منتجك المفضل","أكمل عملية الشراء","نوصل إليك طلبك"];
        $title_en = [
        "Download the application","Register your data","Browse products",
        "Choose your favorite product","Complete your purchase","We deliver your order to you",];
        $count=['10','50',"150","1235",'10','50',];
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
