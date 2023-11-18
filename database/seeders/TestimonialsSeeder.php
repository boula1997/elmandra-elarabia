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
                     "Dalia Samir",
                     "Emily",
                    ];

        $subtitle_en = [
                        "Customer,USA",
                        "Customer,USA",
                        "Customer,USA",];

        $description_en = ["<p>I can't say enough about the incredible selection and service at EL Alamia. They have everything a passionate gamer like me could ever want. I've been a loyal customer for years, and they never disappoint!</p>",

                           "<p>I was blown away by the knowledgeable and friendly staff at EL Alamia. They helped me find the perfect game for my son's birthday, and their recommendations were spot on. Thank you for making the shopping experience so enjoyable!</p>",

                           "<p>As an avid gamer, I've visited many gaming stores, but EL Alamia stands out from the rest. Their attention to detail, competitive prices, and the overall atmosphere make it a haven for gamers. I highly recommend it to anyone in search of their next gaming adventure</p>",
                         ];

        
        $title_ar = ["عمر محمد",
                     " داليا سمير",
                    "ايميلى",
                ];

        $subtitle_ar =[ "العميل، الولايات المتحدة الأمريكية",
                        "العميل، الولايات المتحدة الأمريكية",
                        "العميل، الولايات المتحدة الأمريكية",];

        $description_ar =["<p>لا أستطيع أن أقول ما يكفي عن الاختيار والخدمة المذهلة في العالمية. لديهم كل ما يمكن أن يرغب فيه لاعب متحمس مثلي. لقد كنت عميلاً مخلصًا لسنوات، ولم يخيب ظني أبدًا!</p>",

                         "<p>لقد أذهلني فريق العمل الودود وذو الخبرة في العالمية. لقد ساعدوني في العثور على اللعبة المثالية لعيد ميلاد ابني، وكانت توصياتهم في محلها. شكرًا لك على جعل تجربة التسوق ممتعة للغاية!</p>",
                         
                         "<p>لقد اكتشفت مؤخرًا العالمية، وأصبح المكان الذي أقصده لكل ما يتعلق بالألعاب. المتجر منظم جيدًا، والموظفون متعاونون بشكل لا يصدق. إنهم يبذلون قصارى جهدهم لضمان العثور على الألعاب التي أبحث عنها أبحث عنه. إنها حقًا جنة اللاعب!</p>"];
 
        $image=["images/a1PBmbxz4BV96qfoWxoUqusXnfgTBL8DxzPe6Bpg.jpg",
                "images/a1PBmbxz4BV96qfoWxoUqusXnfgTBL8DxzPe6Bpg.jpg",
                "images/a1PBmbxz4BV96qfoWxoUqusXnfgTBL8DxzPe6Bpg.jpg",];
       

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
