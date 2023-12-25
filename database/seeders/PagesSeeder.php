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
                        "About us",
                        "Our Services",
                        "Testimonials",
                        "Our Stuff",
                        "Pricing",
                        "Company Benefit",
                        "Your Questions Answered",
                    ];

        $subtitle_en = [
                           "Empowering Journeys, Redefining Logistics",
                           "Tailored Solutions, Driven by Excellence",
                           "What Our Customers Say",
                           "Meet With Expert Team",
                           "Our Best Pricing Plan",
                           "Why Do You Like AlMandarah AlArabia?",
                           "Clearing the Road: Your Queries, Our Solutions",
                        ];

        $description_en = [
                           "<p>Born from a passion for seamless logistics and unwavering commitment, our trucking company thrives on the open road. With a heritage steeped in reliability and a future driven by innovation, we've evolved into a trusted name in transportation. Each journey symbolizes our dedication to precision, safety, and exceeding expectations. From humble beginnings to expansive horizons, we've built a legacy of delivering more than just goods - we deliver peace of mind.</p>",
                            null,
                            null,
                            null,
                            null,
                            "<p>More than a supplier, we work as a true partner and accompany you with recommendations, based on your buing data, so that you can reduce your costs,</p>",
                            null,
                        ];


        // Arabic Data
        $title_ar = [
                        "من نحن",
                        "خدماتنا",
                        "اراء العملاء",
                        "فريقنا المتميز",
                        "الاسعار",
                        "منفعة الشركة",
                        "الإجابة على أسئلتك",
                    ];

    
            $subtitle_ar = [
                           "تمكين الرحلات، وإعادة تعريف الخدمات اللوجستية",
                           "حلول مخصصة يقودها التميز",
                            "ما يقوله عملاؤنا",
                            "لقاء مع فريق الخبراء",
                            "افضل خطة اسعار لدينا",
                            "لماذا تحب المندرة العربية؟",
                            "تمهيد الطريق: استفساراتك، حلولنا",
                            ];
    
            $description_ar = [
                                "نشأت شركة النقل بالشاحنات لدينا من شغفنا بتقديم الخدمات اللوجستية السلسة والالتزام الذي لا يتزعزع، وتزدهر على الطريق المفتوح. مع تراث مليء بالموثوقية ومستقبل يقوده الابتكار، تطورنا لنصبح اسمًا موثوقًا به في مجال النقل. ترمز كل رحلة إلى التزامنا بالدقة والسلامة وتجاوز التوقعات. من بدايات متواضعة إلى آفاق واسعة، قمنا ببناء إرث لتقديم أكثر من مجرد سلع - فنحن نقدم راحة البال.",
                                null,
                                null,
                                null,
                                null,
                                "<p>أكثر من مجرد مورد، نحن نعمل كشريك حقيقي ونرافقك بالتوصيات، بناءً على بيانات الشراء الخاصة بك، حتى تتمكن من تقليل تكاليفك،</p>",
                                null,
                            ];    

            $identifiers=[ "about","service","testimonials","team","pricing","company_benefit","faq",
                         ];  

                        //  images/VaSC7BojUjitywEAhEwzNaxkeCntv2cgR58mhsTu.jpg
             $images=[ 
                        ["images/cdryGvudn9xMIamy0KnEAIXdHbVn8vEoezFmGDMW.jpg"],
                        ["images/p47SZc3Tzf8pMZJnFs8Y7iA3mQyrl56RiA5qNDSO.jpg"],
                        ["images/wYjibhR2yMlf26YI4cK1ur3kgABYgmRLxfFxtzuF.jpg"],
                        ["images/guKTBu7bxOzijaxz4bsfQ66Q4rrRsReuGznAdTW7.webp"],
                        null,
                        null,
                        ["images/I62Ioyia6DWF2AoN67RXITItqhRPfzMCPd8QBguc.jpg"],

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
