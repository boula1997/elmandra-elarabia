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
        $title_ar = ["خبرتنا"];
        $title_en = ["EXPERIENCE"];
        $description_ar = [null];
        $description_en = [null];
        $address_ar = ["المنيا"];
        $address_en = ["Minya"];
        $owner=["ibrahim"];
        $phone=["01289189890"];
      

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
