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
        $title_en = [null, null, null, null,null,null, null, null, null,null,null, null, null, null,null,];
      
        $title_ar =  [null, null, null, null,null,null, null, null, null,null,null, null, null, null,null,];

        $image=[
                    "images/MKoLM94lVoP7563PD42PUUGxLhgHtwjjundCE1vt.png",
                    "images/q8a69HBhA6VrVWbB4Do4uxI6EBA3dPkIGhEueQK9.png",
                    "images/RlJwPNrPVKWT4wC04tQP38XfmNHvAphY6cPJUNR4.png",
                    "images/FWVof4oKC2t0boQWXjBMigRk1MK4i2YlXXNgWau4.png",
                    "images/AsjnmjW6knzzZMOgIoMmPoW3b52o5fikDc9GRdZf.png",
                    "images/i0tgEpbM2dmYwhZHVIqSzsTj1pI5b9yh8H6vkKBx.png",
                    "images/I3NhYkMdgu0lH6sRpbnhnAoAOrl8LclLYibEfLV6.png",
                    "images/SEkrgqoaQR0pdK121otKEnflo6iTjRCjPtu1FrBZ.png",
                    "images/XlL8y8i6AO7Hr1LcJ5XVabQ8kYPf5AlVoi4exCHM.png",
                    "images/VkSn2Vqaemdj3IbODWgWtyDygQ3ak4WUUjxiXKVU.png",
                    "images/tgob9izDbMPLvxy1FLkGW97h9PYEhhHOASSVD433.png",
                    "images/QPgJqDFz7xwXho35MvueTKmQnAnEKNYNRfceaMSd.png",
                    "images/DJKlf5R71cxa4LdkqhxEr1XL812Xndj8oCktwgo8.png",
                    "images/ubZCHYntUgutPBIlYiCD5p5HqzpaualsUdBe5TDd.png",
                    "images/vC2s56BB7zx0aQugzENp4aIk72yjKYIQjXTpCzIj.png",
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
