<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["Service and Maintenance","Financing and Leasing Services","Transport and shipping",
                    "Securities","Sell to Almandara AlArabia!","Almandara AlArabia Vans",
                    ];
        $title_ar = [
                        "الخدمة والصيانة","خدمات التمويل والتأجير","النقل والشحن",
                        "الضمانات","البيع لالمندرة العربية!","المندرة العربية فان",
                    ]; 

      
        $description_en = ["<p>We will assist you not only in purchasing a vehicle, but also in managing all the required documents, inspection reports, service, accessories, and parts and components.</p>",
                            "<p>We are aware that purchasing a new vehicle can be a major expense, and we will be happy to help you explore some of the alternatives available, including leasing.</p>",
                            "<p>Need to transport your new vehicle to your location? We have already compiled a list for you of the best transport companies.</p>",
                            "<p>We’ll get you on the road safely and securely – check out our delivery packages here.</p>",
                            "<p>Would you like to receive a competitive offer for your vehicle within 24 hours? Our Purchasing team will be happy to assist you.</p>",
                            "<p>At Almandara AlArabia Vans you can choose from a continually changing stock of +500 used vans.</p>",];
        $description_ar = [
                            "<p>لن نساعدك فقط في شراء المركبة، بل أيضًا في إدارة جميع المستندات المطلوبة وتقارير الفحص والخدمة والملحقات والأجزاء والمكونات.</p>",
                            "<p>نحن ندرك أن شراء مركبة جديدة يمكن أن يمثل نفقات كبيرة، ويسعدنا مساعدتك في استكشاف بعض البدائل المتاحة، بما في ذلك التأجير.</p>",
                            "<p>سننقلك إلى الطريق بأمان وإحكام - تحقق من باقات التوصيل لدينا هنا.</p>",
                            "<p>سننقلك إلى الطريق بأمان وإحكام - تحقق من باقات التوصيل لدينا هنا.</p>",
                            "<p>هل ترغب في الحصول على عرض تنافسي لمركبتك خلال 24 ساعة؟ سيسعد فريق الشراء لدينا مساعدتك.</p>",
                            "<p>معنا يمكنك الاختيار من بين مخزون دائم التغير يضم أكثر من 500 سيارة مستعملة.</p>",
        ];
        
        $images = [
                    "images/0SabaGaIYDWMG8w2ddJaaH2L1sY7bW7sssNKVASy.jpg",
                    "images/emVBarFnyhgrLvEFGGENhqn9bJyS9JCq3nNOIXwI.jpg",
                    "images/wJccvqjLT6CXbKMV1NpfeK9BcBR7yjUEzJDbWOHm.jpg",
                    "images/pUjn2wd0j0p0ByOkpesu7Yu83XUl6huYz6560ZQx.jpg",
                    "images/qOKHXJBcdNDVZ0RnTLOUgz0A9kqsLEJcpfzSibMP.jpg",
                    "images/EscMw62zFmjxriUY3A9VkLOmo4oOxfYhGqAPVFYE.jpg",
                ];


        for ($i = 0; $i < count($title_ar); $i++) {
            $service = Service::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
            ]);

            $service->file()->create(["url"=>$images[$i]]);
        }
    }
}
