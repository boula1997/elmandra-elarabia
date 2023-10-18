<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["Gaming News and Updates",
                     "Game Reviews and Recommendations",
                     "Gaming Guides and Tutorials",
                     ];
        $subtitle_en = [null,null,null,];

        $description_en = [ "<p>Stay up-to-date with the latest news, announcements, and updates from the gaming industry. We provide timely and accurate information about upcoming game releases, patch notes, events, and more.</p>",
                            "<p>Get comprehensive and unbiased reviews of popular games across various platforms. Our expert reviewers evaluate gameplay, graphics, mechanics, and overall experience to help you make informed decisions about which games to play.</p>",
                            "<p>Enhance your gaming skills with our detailed guides and tutorials. Whether you're a beginner looking for basic game mechanics or an experienced player seeking advanced strategies, we have you covered. Learn tips, tricks, and techniques to level up your gameplay.</p>",
                           ];

        $title_ar = [ "أخبار الألعاب والتحديثات",
                      "تقييمات وتوصيات اللعبة",
                      "أدلة الألعاب والبرامج",
                     ];  

        $subtitle_ar = [null,null,null,
                       ];

        $description_ar = [ "<p>ابق على اطلاع بأحدث الأخبار والإعلانات والتحديثات من صناعة الألعاب. نحن نقدم معلومات دقيقة وفي الوقت المناسب حول إصدارات الألعاب القادمة وملاحظات التصحيح والأحداث والمزيد.</p>",
                            "<p>احصل على تقييمات شاملة وغير متحيزة للألعاب الشهيرة عبر منصات مختلفة. يقوم المراجعون الخبراء لدينا بتقييم طريقة اللعب والرسومات والميكانيكا والخبرة الشاملة لمساعدتك على اتخاذ قرارات مستنيرة بشأن الألعاب التي تريد لعبها.</p>",
                            "<p>عزز مهاراتك في الألعاب من خلال الأدلة والبرامج التعليمية المفصلة لدينا. سواء كنت مبتدئًا يبحث عن آليات اللعبة الأساسية أو لاعبًا ذو خبرة يبحث عن استراتيجيات متقدمة، فلدينا كل ما تحتاجه. تعرف على النصائح والحيل والتقنيات لتحسين مستوى لعبك.</p>",

                           ];

        $images = [ null,
                    null,
                    null,
                  ];
                   

        $icons=["fas fa-gamepad",
                "fas fa-percentage",
                "fab fa-guilded",
                ];

        for ($i = 0; $i < count($title_ar); $i++) {
            $service = Service::create([
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
                'icon'=>$icons[$i],
            ]);

            $service->file()->create(["url"=>$images[$i]]);
        }
    }
}
