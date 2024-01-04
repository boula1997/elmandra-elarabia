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
        }
    }
}
