<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
                     "Omar Mohamed",
                     "Dalia Samir"
                    ];

        $subtitle_en = [
                        "Customer,USA",
                        "Customer,USA"];

        $description_en = ["<p>I had the pleasure of working with the team at Yousab Tech company for my website project, and I couldn't be happier with the results. From start to finish, they demonstrated a high level of professionalism, expertise, and dedication</p>",

                           "<p>I highly recommend Yousab Tech company to anyone in need of professional web development services. They are a talented and reliable team that delivers outstanding results. Working with them has been a pleasure, and I look forward to collaborating with them again in the future</p>"
                         ];

        
        $title_ar = ["عمر محمد",
                     " داليا سمير"];

        $subtitle_ar =[ "العميل، الولايات المتحدة الأمريكية",
                        "العميل، الولايات المتحدة الأمريكية",];

        $description_ar =["<p> لقد كان من دواعي سروري العمل مع فريق شركة يوساب تك في مشروع موقع الويب الخاص بي، ولم أستطع أن أكون أكثر سعادة بالنتائج. لقد أظهروا، منذ البداية وحتى النهاية، مستوىً عالٍ من الاحترافية والخبرة والتفاني </p>",

                            "<p>أوصي بشدة بشركة يوساب تك لأي شخص يحتاج إلى خدمات تطوير الويب الاحترافية. إنهم فريق موهوب وموثوق يحقق نتائج رائعة. لقد كان العمل معهم ممتعًا، وأتطلع إلى التعاون معهم مرة أخرى في المستقبل</p>"];
 
        $image=["images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp",
                "images/w66o7ZleB0PAmRNOOiLp37gmh9iwImRphogPhjFy.webp"];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Testimonial = Testimonial::create([
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
            $Testimonial->file()->create(["url"=>$image[$i]]);
          }
    }
}
