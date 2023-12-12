<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpensesSeeder extends Seeder
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
                        "Latest Testimonials",
                        "Products",
                        "About Us",
                        null,
                        'Why Asl Eltwfeer..?',
                        'How does your Asl Eltwfeer work..?',

                    ];

        $subtitle_en = [
                            "DAILY NEEDS",
                            "Real Refreshment",
                            "GROCERY1920",
                            "A virtual assistant collects the products from your list",
                            "of the week!",
                            "$20 discount for your first order",
                            "What People Say about us",
                            "Our Products",
                            "We Make Organic Fruits and vegetables In Market",
                            "Asl Eltawfeer application.. to deliver food items of all kinds",
                            null,
                            null,
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
                            "<p>Introducing asleltawfeer, your neighborhood grocery store dedicated to providing convenience, quality, and friendly service. Step into our welcoming space where you'll find a wide range of fresh produce, pantry staples, household essentials, and more. With a focus on sourcing locally and offering competitive prices, we strive to meet all your grocery needs while delivering an enjoyable shopping experience. Visit asleltawfeer today and discover the difference of personalized attention and a carefully curated selection of products that cater to your everyday requirements.</p>",
                            "<p> We work as an intermediary between all our valued customers and companies that supply food supplies, so that the food supplies are delivered to the customer’s location, whether it is the home or another location requested by the customer, a school, an office, a mosque, or something else.</p>",
                            "<p>With the Asl Savings application... you can now order food items from anywhere and at any time without thinking about driving the car, going to the store and carrying food items... We save you time and effort...

                            The Asl Savings application... has all food products in all sizes. All you have to do is download the application, browse all the products, then order the product you want and we will deliver it to any place you want, whether a home, a mosque, an office, or anything else... What? Waiting!! Download the application now</p>",
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
                        "أحدث اراء عملائنا",
                        "منتجات",
                        "من نحن",
                        null,
                        "لماذا اصل التوفير..؟",
                        "كيف يعمل اصل التوفير..؟",
                    ];
    
            $subtitle_ar = [
                                "الاحتياجات اليومية" ,
                                "المرطبات الحقيقية",
                                "GROCERY1920",
                                "يقوم المساعد الافتراضي بجمع المنتجات من قائمتك",
                                "لهذا الأسبوع!",

                                "خصم 20% لطلبك الأول",
                                
                                "ماذا يقول الناس عنا",
                                "احدث منتجاتنا",
                                "نحن نصنع الفواكه والخضروات الطازجة في السوق",
                                "تطبيق اصل التوفير.. لتوصيل المواد الغذائية بشتي أنواعها",
                                null,
                                null,
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
                                "<p>نقدم لكم اصل التوفير متجر البقالة في منطقتكم المخصص لتوفير الراحة والجودة والخدمة الودية. ادخل إلى مساحتنا الترحيبية حيث ستجد مجموعة واسعة من المنتجات الطازجة والمواد الغذائية الأساسية والمستلزمات المنزلية والمزيد. مع التركيز على المصادر المحلية وتقديم أسعار تنافسية، فإننا نسعى جاهدين لتلبية جميع احتياجات البقالة الخاصة بك مع تقديم تجربة تسوق ممتعة. قم بزيارة اصل توفير اليوم واكتشف الفرق في الاهتمام الشخصي ومجموعة مختارة بعناية من المنتجات التي تلبي متطلباتك اليومية.</p>",
                                "<p>نعمل كوسيط بين جميع عملائنا الكرام والشركات التي تقوم بتوريد المواد الغذائية بحيث يتم توصيل المواد الغذائية إلى موقع العميل سواء كان المنزل أو موقع آخر يطلبه العميل أو مدرسة أو مكتب أو مسجد أو شيء من آخر.</p>",
                                "<p>مع تطبيق اصل التوفير .. يمكنك الآن طلب المواد الغذائية من أى مكان وفى أى وقت دون التفكير فى قيادة السيارة والذهاب للمتجر وحمل المواد الغذائية.. نحن نوفر عليك الوقت والجهد ..

                                تطبيق اصل التوفير .. به جميع منتجات المواد الغذائية وبجميع الأحجام, كل ما عليك هو تحميل التطبيق وقم بتصفح جميع المنتجات ومن ثم قم بطلب المنتج الذى تريده وسوف نقوم بإصاله إلى أى مكان تريده سواء منزل أو مسجد أو مكتب أو غير ذلك ... ماذا تنتظر !! حمل التطبيق الآن</p>",
                                null,
                            ];    

            $identifiers=[ "slider","mini_slider","discount","product_home",
                           "counter","newsletter","testimonial","product","about",
                           "slider-index","about-index","service-index"
                         ];  

             $images=[ 
                        ["images/rb4oTFL1D3Z8qONhw7PhdIdXrbXnOh6pbX0PZDkr.jpg"],
                        ["images/0g7IJLg63Nydimuc64Tf8MP1MXk5LGXIntnrMdS8.webp"],
                        ["images/XJur2tRb3uXS8qWmkgSbuAJBUcgotx3dltGhcuQz.jpg"],
                            null,
                        ["images/rb4oTFL1D3Z8qONhw7PhdIdXrbXnOh6pbX0PZDkr.jpg"],
                            null,
                            null,
                            null,
                        ["images/bp9cUzaqFDb57OSfsU8BdMyzAIEJD0FS1ejUXwNC.jpg","images/LMx63k9eMcVgWhQmT2LcGxKsChXKJiGdeY5vGKKm.jpg",],
                        ["images/LtrW75RLVuHGYAZa1DYoubuK7sqE2AONu9ieqolt.jpg","images/h0VHaWNgtURyVAOrQL8tflcii2gTVqF7uig09r2F.png"],
                        ["images/bp9cUzaqFDb57OSfsU8BdMyzAIEJD0FS1ejUXwNC.jpg",],
                        ["images/h0VHaWNgtURyVAOrQL8tflcii2gTVqF7uig09r2F.png"],
                    ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $expense = Expense::create([
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
            $expense->file()->create(["url"=>$image]);
     }
    }
}
