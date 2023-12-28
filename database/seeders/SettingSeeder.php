<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'en' => [
                'appointment1' => ': 24/7',
                'copyright' => 'Copyright reserved by AlMandarah AlArabia © 2023',
                'title' => 'AlMandarah AlArabia',
                'address1' => 'AlYarmuk Dist. – AlSahaba St.,Riyadh',
                'address2' => 'Mukhatat One – AlThamaneen St.,Khamis Mushait',
                'postcode1' => 'P.O: 8412   Post. code: 13243',
                'postcode2' => 'P.O: 4936  Post. code: 61412',
                'description' => "Almandara AlArabia was established in 2008, and it provide its services in many fields in all regions throughout the kingdom of Saudi Arabia, and it includes an team of experienced elite engineers, administrators and technicians whose number exceeded 200 employees.",
                'meta_data' => 'Driving Success, Mile by Mile.',
            ],
            'ar' => [
                'appointment1' => ': 24/7',
                'copyright' => 'جميع الحقوق محفوظة لدي المندرة العربية © 2023 ',
                'title' => 'المندرة العربية',
                'address1' => 'حي اليرموك – شارع الصحابة,الرياض',
                'address2' => 'مخطط واحد – شارع الثمانين, خميس مشيط',
                'postcode1' => 'ص ب 8412 . رمز بريدي 13243',
                'postcode2' => 'ص ب 4936 . رمز بريدي 61412',
                'description' => 'تأسست المندرة العربية عام 2008م, وتقوم بتقديم خدماتها في جميع مناطق المملكة العربية السعودية في عدة مجالات وقد تم تصنيفها من قبل وكالة وزارة الشؤون البلدية والقروية لشؤون تصنيف المقاولين (شهادة رقم 19205) في عدد من المجالات وهي تضم نخبة من المهندسين والإداريين والفنيين الذي تجاوز عددهم (220 ) موظف.',
                'meta_data' => 'القيادة النجاح، ميلا بعد ميل.',
            ],
            'logo' => 'images/lD6ULi8Sdc4FM4URkl7mBwNFo4x42h80zuX9SEa9.png',
            'white_logo' => 'images/N2x7y0zbGFqtvy4JwHNNW9AQiFmKuoOXsbHplKVV.png',
            'tab' => 'images/lD6ULi8Sdc4FM4URkl7mBwNFo4x42h80zuX9SEa9.png',
            'breadcrumb'=>'images/cdryGvudn9xMIamy0KnEAIXdHbVn8vEoezFmGDMW.jpg',
            'image' => 'image',
            // 'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55275.18948853619!2d31.18964315!3d30.016788299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1695471231297!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'shipping' => 50,
            'taxes' => 10,
            'latitude' => 24.72106663666815,
            'longitude' => 46.63919448852539,
            
        ]);
    }
}
