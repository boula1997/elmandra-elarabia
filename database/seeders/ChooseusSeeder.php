<?php

namespace Database\Seeders;

use App\Models\Chooseus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChooseusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = [
                        "ما الذي يميز شركة النقل الخاصة بك عن غيرها في الصناعة؟",
                        "سؤال: كيف يمكنك تكييف خدماتك لتلبية احتياجات العملاء المحددة؟",
                        "ما هي التكنولوجيا أو الابتكار الذي تستخدمه لتعزيز خدماتك؟"
                    ];
        $title_en = [
                        "What sets your trucking company apart from others in the industry?",
                        "How do you adapt your services to meet specific client needs?",
                        "What technology or innovation do you employ to enhance your services?"
                    ];



        $description_ar = [
                                "<p>تتميز شركتنا بالتزامنا الثابت بالموثوقية والابتكار ورضا العملاء. نحن نعطي الأولوية للكفاءة والسلامة والخدمة الشخصية لضمان تلبية احتياجات عملائنا وتجاوزها.</p>",
                                "<p>نحن نؤمن بالنهج الشخصي. نحن نتعامل مع عملائنا لفهم متطلباتهم الفريدة ونصمم خدماتنا وفقًا لذلك، مما يضمن تجربة مخصصة تتوافق مع أهدافهم.</p>",
                                "<p>نحن نستثمر باستمرار في أحدث التقنيات لتحسين خدماتنا. بدءًا من تتبع نظام تحديد المواقع العالمي (GPS) وحتى المركبات الموفرة للوقود، يضمن التزامنا بالابتكار عمليات مبسطة وحلول صديقة للبيئة.</p>",
                            ];
        $description_en = [
                                "<p>Our company stands out due to our unwavering commitment to reliability, innovation, and customer satisfaction. We prioritize efficiency, safety, and personalized service to ensure our clients' needs are not just met but exceeded.</p>",
                                "<p>We believe in a personalized approach. We engage with our clients to understand their unique requirements and tailor our services accordingly, ensuring a customized experience that aligns with their objectives.</p>",
                                "<p>We continuously invest in cutting-edge technology to improve our services. From GPS tracking to fuel-efficient vehicles, our commitment to innovation ensures streamlined operations and eco-friendly solutions.</p>",
                            ];

        // $image=[
        //     "images/4UPrBifentc75n3x5k51RHFbze9NhzcFoVl0u4WO.svg",
        //     "images/KjmtwGFMoyOLxhlPUo8AOtHlPIRsjaX30mSJt8em.svg",
        //     "images/JWUBXqPMgUNwwVadtZJa7V3rCZJeJRdHR7OifOMA.svg",
        // ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Chooseus_Translation = Chooseus::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
            ]);
            // $Chooseus_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
