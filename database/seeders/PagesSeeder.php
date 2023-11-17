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
                        "STAY HOME & DELIVERED YOUR",
                        null,
                        "Get $3 Cashback! Min Order of $30",
                        "Home Products ",
                        "Special Offers ",
                        "Join our newsletter and get our news",
                        "TESTIMONIAL",
                        "Products"

                    ];

        $subtitle_en = [
                            "DAILY NEEDS",
                            "Real Refreshment",
                            "GROCERY1920",
                            "A virtual assistant collects the products from your list",
                            "of the week!",
                            "$20 discount for your first order",
                            "OUR CLIENT SAY",
                            "Our Products"
                        
                        ];

        $description_en = [
                            "<p>Many organizations have issued official statements encouraging people to reduce their intake of sugary drinks.</p>",
                            "<p>Only this week, Don't miss..</p>", 
                        
                            null, 

                            null,
                            
                            "Special offer on this discount, Hurry Up!",
                            null,
                            null,
                            null,
                        ];


        // Arabic Data
        $title_ar = [
                        
                        "ابق في المنزل & قم بتوصيل طلبك",
                        null,
                        "احصل على 3 دولارات كاش باك! الحد الأدنى للطلب 30 دولارًا",
                        "منتجات الرئيسية",
                        "عروض خاصة",
                        "انضم إلى نشرتنا الإخبارية واحصل على أخبارنا",
                        "اراء عملائنا",
                        "منتجات",
                    ];
    
            $subtitle_ar = [
                                "الاحتياجات اليومية" ,
                                "المرطبات الحقيقية",
                                "GROCERY1920",
                                "يقوم المساعد الافتراضي بجمع المنتجات من قائمتك",
                                "لهذا الأسبوع!",

                                "خصم 20% لطلبك الأول",
                                
                                "بعض من اراء عملائنا",
                                "احدث منتجاتنا",
                            ];
    
            $description_ar = [
                                "<p>أصدرت العديد من المنظمات بيانات رسمية تشجع الناس على تقليل تناول المشروبات السكرية.</p>",
                                "<p>هذا الاسبوع فقط لا يفوتك..</p>",
                                null,
                                null,
                                "عرض خاص على هذا الخصم، أسرع!",
                                null,
                                null,
                                null,

                            ];    

            $identifiers=[ "slider","mini_slider","discount","product_home",
                           "counter","newsletter","testimonial","product"
                         ];  

             $images=[ 
                        ["images/6Uc5BhjmQJtfneedg6lKQ4U0Mh4SHOs5OAd8StZd.webp"],
                        ["images/aYXssFYileyBQJwArUU3zA1gJHUhzocSQ3agfdoZ.jpg"],
                            null,
                            null,
                            null,
                            null,
                            ["images/mHmk6YZAj2FqyQamlB6DRXHdkcLONAYNG68cjE13.jpg"],
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
