<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
                        "What advantages do your trucks offer in terms of efficiency?",
                        "How does your fleet ensure timely deliveries?",
                        "How does your company support sustainable transportation practices?",
                    ];

        $subtitle_en = [
                           null,
                           null,
                           null,
                        ];

        $description_en = [
                           "<p>Our trucks are equipped with cutting-edge technology and fuel-efficient engines, ensuring optimal performance and reduced carbon footprint. This translates to cost savings and eco-friendly transportation solutions.</p>",    
                           "<p>Our strategically managed fleet, coupled with advanced tracking systems, allows us to optimize routes and schedules. This enables us to guarantee punctual deliveries, meeting deadlines with precision.</p>",    
                           "<p>We are dedicated to sustainable transportation practices. Our fleet is regularly maintained for optimal fuel efficiency, and we actively explore eco-friendly technologies and alternative fuel options to reduce our environmental impact.</p>",    
                            ];

        
        $title_ar = [
                        "ما هي المزايا التي تقدمها شاحناتكم من حيث الكفاءة؟",
                        "كيف يضمن أسطولك التسليم في الوقت المناسب؟",
                        "كيف تدعم شركتك ممارسات النقل المستدام؟",
                    ];

        $subtitle_ar =[ 
                           null,
                           null,
                           null,
                        ];

        $description_ar =[
                            "شاحناتنا مجهزة بأحدث التقنيات والمحركات الموفرة للوقود، مما يضمن الأداء الأمثل وتقليل البصمة الكربونية. وهذا يترجم إلى توفير التكاليف وحلول النقل الصديقة للبيئة.",
                            "يتيح لنا أسطولنا المُدار بشكل استراتيجي، إلى جانب أنظمة التتبع المتقدمة، تحسين المسارات والجداول الزمنية. وهذا يتيح لنا ضمان التسليم في الوقت المحدد، والوفاء بالمواعيد النهائية بدقة.",
                            "نحن ملتزمون بممارسات النقل المستدامة. تتم صيانة أسطولنا بانتظام لتحقيق الكفاءة المثلى في استهلاك الوقود، ونعمل بنشاط على استكشاف التقنيات الصديقة للبيئة وخيارات الوقود البديلة لتقليل تأثيرنا على البيئة.",
                        ];
 
        $image=[
                    "images/zajVGqlLOfI6PPjy0kBtHRGToPlDrQiy8vEJrCss.png",
                    "images/i4b1eF90ksYbs4Hj6Tk3TQDejSrmzsNwIeJENgXv.png",
                    "images/ciQElZ37v7LwpHkvId3D30TORLRXSi9XFKBGZLD2.png",
                ];
        $icon=[
                    null,
                    null,
                    null,
                ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $benefit = Benefit::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                  
                ],
                'icon'=>$icon[$i],
            ]);
            $benefit->file()->create(["url"=>$image[$i]]);
          }
    }
}
