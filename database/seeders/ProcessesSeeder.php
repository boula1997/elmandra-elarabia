<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
                       "STEP - 1",
                       "STEP - 2",
                       "STEP - 3",
                    ];

        $subtitle_en = [
                            "Understanding Your Needs",
                            "Efficient Planning and Logistics",
                            "Constant Monitoring and Communication",
                        ];

        $description_en = [
                               "<p>Our process begins with a detailed consultation to comprehend your transportation requirements. We listen attentively to your needs, specifications, and expectations to lay a solid foundation for our services.</p>",
                               "<p>Precision is our mantra. We meticulously plan each step, optimizing routes, schedules, and resources to ensure the most efficient transportation solution for your cargo.</p>",
                               "<p>Throughout the transportation process, we maintain constant communication and provide real-time updates. Our tracking systems allow you to monitor the progress of your shipment at every stage.</p>",
                            ];

        
        $title_ar = [
                        "خطوة - 1",
                        "خطوة - 2",
                        "خطوة - 3",
                    ];

        $subtitle_ar =[ 
                        "فهم احتياجاتك",
                        "التخطيط الفعال والخدمات اللوجستية",
                        "المراقبة والتواصل المستمر",
                           
                        ];

        $description_ar =[
                            "<p>تبدأ عمليتنا باستشارة مفصلة لفهم متطلبات النقل الخاصة بك. نستمع باهتمام لاحتياجاتك ومواصفاتك وتوقعاتك لوضع أساس متين لخدماتنا.</p>",
                            "<p>الدقة هي شعارنا. نحن نخطط بدقة لكل خطوة، ونعمل على تحسين المسارات والجداول الزمنية والموارد لضمان حل النقل الأكثر كفاءة لبضائعك.</p>",
                            "<p>طوال عملية النقل، نحافظ على التواصل المستمر ونقدم التحديثات في الوقت الفعلي. تسمح لك أنظمة التتبع لدينا بمراقبة تقدم شحنتك في كل مرحلة.</p>",
                        ];
 
        $image=[
                    "images/7T0f1Uj8ykLs2e0vYxhcGLo1CKoOpEZcnubBxHyh.png",
                    "images/caXp29H3J37bQoAY3ctLFotEgLBAuMOc0G4m9D5d.png",
                    "images/94pn2S2YYLUJ8awxFWVNu1AYe2BWsNIhdmGysZJL.png",
                ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $process = Process::create([
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
            ]);
            $process->file()->create(["url"=>$image[$i]]);
          }
    }
}
