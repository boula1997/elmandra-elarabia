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
                        "Company Benefit",
                        "Your Questions Answered",
                        "latest projects",
                        "GET IN TOUCH",
                        "WORK PROCESS",
                        "Vision",
                        "Mission",
                    ];

        $subtitle_en = [
                           "Empowering Journeys, Redefining Logistics",
                           "Tailored Solutions, Driven by Excellence",
                           "What Our Customers Say",
                           "Meet With Expert Team",
                           "Why Do You Like AlMandarah AlArabia?",
                           "Clearing the Road: Your Queries, Our Solutions",
                           "Driving Success, One Project at a Time",
                           "Looking For The Best Trucks car",
                           "Easy 3 Working Step",
                            null,
                            null,
                        ];

        $description_en = [
                           "<p>Born from a passion for seamless logistics and unwavering commitment, our trucking company thrives on the open road. With a heritage steeped in reliability and a future driven by innovation, we've evolved into a trusted name in transportation. Each journey symbolizes our dedication to precision, safety, and exceeding expectations. From humble beginnings to expansive horizons, we've built a legacy of delivering more than just goods - we deliver peace of mind.</p>",
                            null,
                            null,
                            null,
                            "<p>More than a supplier, we work as a true partner and accompany you with recommendations, based on your buing data, so that you can reduce your costs,</p>",
                            null,
                            null,
                            "<p>Transport Services</p>",
                            null,
                            "<p>Envisioning a future of seamless logistics, our company's vision is to revolutionize transportation. We aspire to lead with innovation, reliability, and sustainability, forging paths that exceed expectations, connect communities, and drive progress. Our aim is to set new standards, delivering excellence in every mile traveled, redefining the way goods move and connections thrive.</p>",
                            "<p>Our mission is to deliver excellence in transportation by providing reliable, efficient, and sustainable logistics solutions. We are dedicated to meeting and exceeding our customers' needs, fostering innovation, and cultivating a collaborative culture that values integrity, safety, and environmental responsibility. Through our commitment to quality service, we aim to drive success, create lasting partnerships, and propel industries forward with every journey.</p>",
                        ];


        // Arabic Data
        $title_ar = [
                        "من نحن",
                        "خدماتنا",
                        "اراء العملاء",
                        "فريقنا المتميز",
                        "منفعة الشركة",
                        "الإجابة على أسئلتك",
                        "أحدث المشاريع",
                        "ابقى على تواصل",
                        "آلية العمل",
                        "رؤيتنا",
                        "رسالتنا",
                    ];

    
            $subtitle_ar = [
                           "تمكين الرحلات، وإعادة تعريف الخدمات اللوجستية",
                           "حلول مخصصة يقودها التميز",
                            "ما يقوله عملاؤنا",
                            "لقاء مع فريق الخبراء",                            "لماذا تحب المندرة العربية؟",
                            "تمهيد الطريق: استفساراتك، حلولنا",
                            "قيادة النجاح، مشروع واحد في كل مرة",
                            "أبحث عن أفضل سيارة الشاحنات",
                            " اسهل 3 خطوات عمل",
                            null,
                            null,
                            ];
    
            $description_ar = [
                                "نشأت شركة النقل بالشاحنات لدينا من شغفنا بتقديم الخدمات اللوجستية السلسة والالتزام الذي لا يتزعزع، وتزدهر على الطريق المفتوح. مع تراث مليء بالموثوقية ومستقبل يقوده الابتكار، تطورنا لنصبح اسمًا موثوقًا به في مجال النقل. ترمز كل رحلة إلى التزامنا بالدقة والسلامة وتجاوز التوقعات. من بدايات متواضعة إلى آفاق واسعة، قمنا ببناء إرث لتقديم أكثر من مجرد سلع - فنحن نقدم راحة البال.",
                                null,
                                null,
                                null,
                                "<p>أكثر من مجرد مورد، نحن نعمل كشريك حقيقي ونرافقك بالتوصيات، بناءً على بيانات الشراء الخاصة بك، حتى تتمكن من تقليل تكاليفك،</p>",
                                null,
                                null,
                                "<p>خدمات النقل</p>",
                                null,
                                "<p>من خلال تصور مستقبل الخدمات اللوجستية السلسة، تتمثل رؤية شركتنا في إحداث ثورة في مجال النقل. نحن نطمح إلى الريادة بالابتكار والموثوقية والاستدامة، وتشكيل مسارات تتجاوز التوقعات، وتربط المجتمعات، وتدفع عجلة التقدم. هدفنا هو وضع معايير جديدة، وتحقيق التميز في كل ميل يتم قطعه، وإعادة تعريف الطريقة التي تتحرك بها البضائع وتزدهر الاتصالات.</p>",
                                "<p>مهمتنا هي تقديم التميز في مجال النقل من خلال توفير حلول لوجستية موثوقة وفعالة ومستدامة. نحن ملتزمون بتلبية احتياجات عملائنا وتجاوزها، وتعزيز الابتكار، وتنمية ثقافة تعاونية تقدر النزاهة والسلامة والمسؤولية البيئية. ومن خلال التزامنا بجودة الخدمة، نهدف إلى تحقيق النجاح وإنشاء شراكات دائمة ودفع الصناعات إلى الأمام في كل رحلة.</p>",
                            ];    

            $identifiers=[ "about","service","testimonials","team","company_benefit","faq","project","newsletter","process","vision","mission",
                         ];  

                        //  images/VaSC7BojUjitywEAhEwzNaxkeCntv2cgR58mhsTu.jpg
             $images=[ 
                        ["images/cdryGvudn9xMIamy0KnEAIXdHbVn8vEoezFmGDMW.jpg","images/guKTBu7bxOzijaxz4bsfQ66Q4rrRsReuGznAdTW7.webp"],
                        ["images/p47SZc3Tzf8pMZJnFs8Y7iA3mQyrl56RiA5qNDSO.jpg"],
                        ["images/wYjibhR2yMlf26YI4cK1ur3kgABYgmRLxfFxtzuF.jpg"],
                        ["images/guKTBu7bxOzijaxz4bsfQ66Q4rrRsReuGznAdTW7.webp"],
                        null,
                        ["images/I62Ioyia6DWF2AoN67RXITItqhRPfzMCPd8QBguc.jpg"],
                        null,
                        null,
                        ["images/cdryGvudn9xMIamy0KnEAIXdHbVn8vEoezFmGDMW.jpg"],
                        ["images/Yy6qHtxrUnsTGYG6IonLYSAq7RSrWovi2QhDH7N0.png"],
                        ["images/pJrWKqvuDTkd6iIsIs4s4iGmBLYb2Ekww17EGCoi.png"],
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
