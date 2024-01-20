<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = [
            "ناقلات مايلستون",
            "أبيكس لحلول الشحن",
            "ناقلات تيتان",
            "قمة اكسبريس للخدمات اللوجستية",
            "شركة الدقة للناقلات",
            "شركة فانجارد للنقل بالشاحنات",
        ];
        $title_en = [
            "Milestone Haulers",
            "Apex Cargo Solutions",
            "Titan Transporters",
            "Summit Express Logistics",
           "Precision Carriers Inc.",
           "Vanguard Trucking Co.",
        ];
        $description_ar = [null,null,null,null,null,null,];
        $description_en = [null,null,null,null,null,null,];
        $address_ar = ["المنيا","القاهرة","الاسكندرية","القاهرة","القاهرة","الاسكندرية",];
        $address_en = ["Minya","Cairo","Alex","Cairo","Cairo","Alex",];
        $owner=["ibrahim","boula","ahmed","mohammed","emad","kero",];
        $phone=["01289189890","01235489789","01145879789","01215469364","01025498982","0112458962",];

        $images = [
            // 1
            "images/aAqwbU92zEb3FYcEdhkcjSaJsaXyACMLhC4YuyB1.png",
            "images/ogN9wycxsJRloWZszJ1AmCtgRvnQ7THgNUIz2JQQ.webp",
            "images/JRm9sbXmZoG9MhXa6cm8xJSIdeez2l85JqhNPAcu.png",
            "images/5QxSk4kw5bDixVXYsimhIy5UatNvHstSIINJML4n.png",
            "images/d7M3qytjQk6lJev1DCSWfIxfpOg2FoKHSYZgxzKd.png",
            "images/uPsojf7wep44yOGGfoSxdb84zyv8RqVWpb28khZ7.png",
            // 2
            "images/m7E3LygclSPmXBG2iss7his9GjJ7a2EqnjBjci6t.png",
            ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Company_Translation = Company::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'address' => $address_ar[$i],
                    'description' => $description_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'address' => $address_en[$i],
                    'description' => $description_en[$i],
                ],
                    'phone'=>$phone[$i],
                    'owner'=>$owner[$i],
            ]);

            $Company_Translation->file()->create(["url"=>$images[$i]]);
        }
    }
}
