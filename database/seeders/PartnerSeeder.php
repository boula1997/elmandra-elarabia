<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
                        "Volvo Trucks",
                        "Daimler Trucks (Mercedes-Benz Trucks)",
                        "Trimble Transportation",
                        "Omnitracs",
                        "Geotab",
                        "DHL",
                    
        ];
      
        $title_ar =  [
                        "شاحنات فولفو",
                        "شاحنات دايملر (شاحنات مرسيدس بنز)",
                        "تريمبل للنقل",
                       " أومنيتراكس",
                        "تحديد الموقع الجغرافي",
                        "دي إتش إل",
                      
        ];

        $image=[
                    "images/AzBvGRhksbu4fjz1M01EsBP1KsZIfSKr5rZ9opee.png",
                    "images/KUkBgVIFHwH0E3vYN1AS5WUeAPHqwb5kbno4vPfW.png",
                    "images/GAPrstn2amipiheU7TzIz4A8dWDI7V0dOO41TFJ7.png",
                    "images/g4x4CVtOoGK9F71SnalBJjrEtmWshtWEs8fNio35.png",
                    "images/RHZJtfBVAtmmxC1aifJRTg2IpkJwM6bUlYQjAnpu.jpg",
                    "images/yBUae2OeKrspHULJyoVYw3VI6JHqTHhF2uj73vDN.jpg",
                ];
       
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Partner = Partner::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
            ]);
            $Partner->file()->create(["url"=>$image[$i]]);
          }
    }
}
