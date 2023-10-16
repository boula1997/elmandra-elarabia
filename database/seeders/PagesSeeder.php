<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // English Data
        $title_en = [
                        "Best Gaming center",
                        "About Our Gaming Community",
                        null,
                        null,
                        null,

                    ];

        $subtitle_en = [
                            "GROW YOUR playing skills WITH OUR center",
                            "Unleashing the Power of Gaming",
                            null,
                            null,
                            "30% DISCOUNT FOR THIS SUMMER"
                        
                        ];

        $description_en = [
                            null,
                            "<p>Through our comprehensive platform, we provide the latest gaming news, in-depth reviews, expert guides, and captivating features that cater to your gaming interests. Whether you're a casual gamer, a competitive player, or simply someone who loves to immerse themselves in virtual worlds, we have something for you.</p>", 
                        
                            "<p>Our vision is to create a premier gaming website that serves as a hub for gamers worldwide. We aim to be a go-to destination for all gaming enthusiasts, providing them with a comprehensive platform that offers high-quality content, engaging experiences, and a vibrant community. Our vision is to inspire, entertain, and connect gamers of all ages and backgrounds, fostering a sense of belonging and excitement within the gaming community.</p>", 

                            "<p>Our mission is to deliver exceptional gaming experiences through our website, catering to the diverse interests and preferences of gamers. We strive to Provide Engaging Content: We commit to delivering top-notch gaming content, including news, reviews, guides, tutorials, and features that inform, entertain, and educate our audience. We aim to be a reliable source of accurate and up-to-date information, ensuring that gamers can rely on us for their gaming needs.</p>",
                            
                            null,
                        ];


        // Arabic Data
        $title_ar = [
                        "أفضل مركز ألعاب",
                        "حول مجتمع الألعاب لدينا",
                        null,
                        null,
                        null,
                    ];
    
            $subtitle_ar = [
                                "قم بتنمية مهاراتك في اللعب مع مركزنا",
                                "إطلاق العنان لقوة الألعاب",
                                null,
                                null,
                                "خصم 30% لهذا الصيف",

                            
                            ];
    
            $description_ar = [
                                null,
                                "<p>من خلال منصتنا الشاملة، نقدم أحدث أخبار الألعاب، والمراجعات المتعمقة، وأدلة الخبراء، والميزات الجذابة التي تلبي اهتماماتك في الألعاب. سواء كنت لاعبًا عاديًا، أو لاعبًا تنافسيًا، أو ببساطة شخصًا يحب الانغماس في العوالم الافتراضية، فلدينا ما يناسبك.</p>",
                                
                                "<p>تتمثل رؤيتنا في إنشاء موقع ويب متميز للألعاب يكون بمثابة مركز للاعبين في جميع أنحاء العالم. نهدف إلى أن نكون وجهة مفضلة لجميع عشاق الألعاب، ونوفر لهم منصة شاملة تقدم محتوى عالي الجودة وتجارب جذابة ومجتمعًا نابضًا بالحياة. رؤيتنا هي إلهام وترفيه وربط اللاعبين من جميع الأعمار والخلفيات، وتعزيز الشعور بالانتماء والإثارة داخل مجتمع الألعاب.</p>",

                                "<p>رسالتنا هي تقديم تجارب ألعاب استثنائية من خلال موقعنا الإلكتروني، بما يلبي اهتمامات وتفضيلات اللاعبين المتنوعة. نحن نسعى جاهدين لتوفير محتوى جذاب: نحن ملتزمون بتقديم محتوى ألعاب من الدرجة الأولى، بما في ذلك الأخبار والمراجعات والأدلة والبرامج التعليمية والميزات التي تُعلم جمهورنا وتسليه وتثقيفه. نحن نهدف إلى أن نكون مصدرًا موثوقًا للمعلومات الدقيقة والحديثة، مما يضمن أن اللاعبين يمكنهم الاعتماد علينا لتلبية احتياجاتهم في الألعاب.</p>",
                                null,

                            ];    

            $identifiers=["blog","about","vision","mission","service",
                         ];  

             $images=[ 
                         ["images/6Uc5BhjmQJtfneedg6lKQ4U0Mh4SHOs5OAd8StZd.webp"],
                         null,
                         null,
                         null,
                         null,
                        
                      ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $page = Page::create([
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
                'identifier'=>$identifiers[$i]
            ]);

            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $page->file()->create(["url"=>$image]);
     }
    }
}
