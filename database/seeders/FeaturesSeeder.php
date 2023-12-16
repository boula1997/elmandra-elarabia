<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["سنوات الخبرة","مبيعات المنتجات","عملائنا"];
        $title_en = ["Business Years","Products Sales","Happy Customers"];



        $description_ar = [
            "<p>لقد خدم سوبر ماركتنا المجتمع بكل فخر لمدة 10 سنوات. ومع إرث مبني على الجودة والموثوقية والخدمة الاستثنائية، فإننا نواصل كوننا وجهتك الموثوقة لجميع احتياجات البقالة الخاصة بك.</p>",
            "<p>استكشف قسم مبيعات المنتجات لدينا للحصول على عروض وخصومات لا تقبل المنافسة على مجموعة واسعة من العناصر عالية الجودة. من المنتجات الطازجة إلى الضروريات المنزلية وغيرها، اكتشف توفيرًا كبيرًا دون المساس بالجودة. أسرع للحصول على عروض لفترة محدودة وصفقات رائعة على منتجاتك المفضلة!.</p>",
            "<p>قسم العملاء السعداء يحتفل بكم! نحن نفخر بتقديم خدمة استثنائية ومنتجات عالية الجودة ترسم البسمة على وجوه عملائنا. انضم إلى عدد لا يحصى من المتسوقين الراضين الذين يثقون بنا للحصول على تجربة تسوق ممتعة في كل زيارة. رضاكم هو أولويتنا!</p>",
        ];
        $description_en = [
                "<p>Our supermarket has proudly served the community for 10 years. With a legacy built on quality, reliability, and exceptional service, we continue to be your trusted destination for all your grocery needs.</p>",

                "<p>Explore our Products Sales section for unbeatable deals and discounts on a wide range of quality items. From fresh produce to household essentials and beyond, discover great savings without compromising on quality. Hurry in for limited-time offers and fantastic bargains on your favorite products!.</p>",

                "<p>Our Happy Customers section celebrates YOU! We take pride in delivering exceptional service and quality products that bring smiles to our customers' faces. Join the countless satisfied shoppers who trust us for a delightful shopping experience every visit. Your satisfaction is our priority!</p>"
        ];

        $image=[
            "images/4UPrBifentc75n3x5k51RHFbze9NhzcFoVl0u4WO.svg",
            "images/KjmtwGFMoyOLxhlPUo8AOtHlPIRsjaX30mSJt8em.svg",
            "images/JWUBXqPMgUNwwVadtZJa7V3rCZJeJRdHR7OifOMA.svg",
        ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Feature_Translation = Feature::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
            ]);
            $Feature_Translation->file()->create(["url"=>$image[$i]]);
        }
    }
}
