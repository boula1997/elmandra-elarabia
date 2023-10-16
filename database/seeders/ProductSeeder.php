<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["PainRelief-X",
                     "RevitaCardio",
                     "ImmunoBoost Plus",
                     "MindEase",
                     "DigestiCare"];
        $subtitle_en = [null,null,null,null,null];
        $description_en = [ "<p>PainRelief-X is a fast-acting analgesic designed to provide effective relief from acute and chronic pain. Its advanced formula combines a potent pain reliever with anti-inflammatory properties, offering targeted relief for a wide range of conditions such as headaches, muscle aches, arthritis, and post-operative pain. PainRelief-X is available in both oral and topical forms, providing flexible and convenient options for pain management.</p>",
                            "<p>RevitaCardio is a breakthrough cardiovascular medication that supports heart health and promotes optimal circulation. Its unique formulation includes a blend of clinically proven ingredients that help maintain healthy blood pressure levels, reduce cholesterol, and improve overall cardiac function. With regular use, RevitaCardio aims to enhance cardiovascular wellness and reduce the risk of heart-related complications.</p>",

                            "<p>ImmunoBoost Plus is a comprehensive immune support supplement designed to strengthen the body's natural defense mechanisms. Packed with essential vitamins, minerals, antioxidants, and immune-enhancing botanical extracts, ImmunoBoost Plus helps fortify the immune system, increase resistance to infections, and promote overall well-being. It is an ideal choice for individuals looking to maintain a robust immune system, especially during periods of increased susceptibility to illness.</p>",
                            "<p>MindEase is a scientifically formulated supplement that supports cognitive function and mental clarity. Its blend of neuroprotective compounds and brain-boosting nutrients works synergistically to enhance memory, focus, and overall brain health. MindEase is particularly beneficial for individuals seeking cognitive support during periods of increased mental demands, such as studying, work projects, or aging-related cognitive decline.</p>",
                            "<p>DigestiCare is a comprehensive digestive health supplement that promotes optimal gastrointestinal function. Its carefully selected blend of enzymes, probiotics, and soothing botanicals supports healthy digestion, relieves symptoms of indigestion, and improves nutrient absorption. DigestiCare is suitable for individuals experiencing digestive discomfort, bloating, or irregular bowel movements, providing natural and gentle relief for a healthy digestive system.</p>"];

        $title_ar = ["تخفيف الألم-X",
                     "ريفيتاكارديو",
                     "إيمونوبوست بلس",
                     "مايند ايز",
                     "ديجيستي كير"];  

        $subtitle_ar = [null,null,null,null,null];

        $description_ar = [ "<p>مسكن سريع المفعول مصمم لتوفير راحة فعالة من الألم الحاد والمزمن. تجمع تركيبته المتقدمة بين مسكن الألم القوي والخصائص المضادة للالتهابات، مما يوفر راحة مستهدفة لمجموعة واسعة من الحالات مثل الصداع وآلام العضلات والتهاب المفاصل وآلام ما بعد العمليات الجراحية. يتوفر PainRelief-X في كل من الأشكال الفموية والموضعية، مما يوفر خيارات مرنة ومريحة لإدارة الألم.</p>",
                            "<p>دواء خارق للقلب والأوعية الدموية يدعم صحة القلب ويعزز الدورة الدموية المثلى. تشتمل تركيبته الفريدة على مزيج من المكونات المثبتة سريريًا والتي تساعد في الحفاظ على مستويات ضغط الدم الصحية وتقليل نسبة الكوليسترول وتحسين وظيفة القلب بشكل عام. مع الاستخدام المنتظم، يهدف RevitaCardio إلى تعزيز صحة القلب والأوعية الدموية وتقليل مخاطر المضاعفات المرتبطة بالقلب.</p>",
                            "<p>مكمل دعم مناعي شامل مصمم لتقوية آليات الدفاع الطبيعية في الجسم. غني بالفيتامينات الأساسية والمعادن ومضادات الأكسدة والمستخلصات النباتية المعززة للمناعة، يساعد ImmunoBoost Plus على تقوية جهاز المناعة وزيادة مقاومة العدوى وتعزيز الصحة العامة. إنه خيار مثالي للأفراد الذين يتطلعون إلى الحفاظ على نظام مناعة قوي، خاصة خلال فترات زيادة التعرض للأمراض.</p>",
                            "<p>مكمل مركب علميًا يدعم الوظيفة الإدراكية والوضوح العقلي. مزيجه من المركبات الوقائية للأعصاب والمواد المغذية المعززة للدماغ يعمل بشكل تآزري لتعزيز الذاكرة والتركيز وصحة الدماغ بشكل عام. يعد MindEase مفيدًا بشكل خاص للأفراد الذين يبحثون عن الدعم المعرفي خلال فترات زيادة المتطلبات العقلية، مثل الدراسة أو مشاريع العمل أو التدهور المعرفي المرتبط بالشيخوخة.</p>",
                            "<p>مكمل صحي شامل للجهاز الهضمي يعزز وظيفة الجهاز الهضمي المثلى. مزيجه المختار بعناية من الإنزيمات والبروبيوتيك والنباتات المهدئة يدعم الهضم الصحي ويخفف أعراض عسر الهضم ويحسن امتصاص العناصر الغذائية. DigestiCare مناسب للأفراد الذين يعانون من عدم الراحة في الجهاز الهضمي، أو الانتفاخ، أو حركات الأمعاء غير المنتظمة، مما يوفر راحة طبيعية ولطيفة لجهاز هضمي صحي.</p>"
                        ];

        $images = ["images/2uU8QtkgxzZcCuDBS7yicdZbpTuyjQKsIE4HIh8r.jpg",
                    "images/2uU8QtkgxzZcCuDBS7yicdZbpTuyjQKsIE4HIh8r.jpg",
                    "images/SVKTJFEIhJ4eLXmprDPQIU5VBV36y5wUbKbClh13.webp",
                    "images/tfBgiVdM2z3x9xmksg41XO7u66i250yjU4dqHeeD.webp",
                    "images/tfBgiVdM2z3x9xmksg41XO7u66i250yjU4dqHeeD.webp"
                ];

        $icons=[ null,
                 null,
                 null,
                 null,
                 null];

        for ($i = 0; $i < count($title_ar); $i++) {
            $product = Product::create([
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

            $product->file()->create(["url"=>$images[$i]]);
        }
    }
}
