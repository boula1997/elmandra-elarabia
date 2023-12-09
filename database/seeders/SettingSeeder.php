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
                'copyright' => 'Copyright reserved by EL Asl El Tawfeer © 2023',
                'title' => 'Asl El Tawfeer',
                'address' => 'Saudi Arabia',
                'description' => "Introducing Asl El Tawfeer, your neighborhood grocery store dedicated to providing convenience, quality, and friendly service.",
                'meta_data' => 'Supermarket store Company',
            ],
            'ar' => [
                'appointment1' => ': 24/7',
                'copyright' => 'جميع الحقوق محفوظة لدي اصل التوفير © 2023 ',
                'title' => 'اصل التوفير',
                'address' => 'السعودية',
                'description' => 'نقدم لكم أصل التوفير، متجر البقالة الخاص بك والمخصص لتوفير الراحة والجودة والخدمة الودية.',
                'meta_data' => 'شركة محلات السوبر ماركت',
            ],
            'logo' => 'images/ApNRObV5QhmkEVoesh1rIRgovhev2vaxiQ5ekf21.png',
            'white_logo' => 'images/ApNRObV5QhmkEVoesh1rIRgovhev2vaxiQ5ekf21.png',
            'tab' => 'images/ApNRObV5QhmkEVoesh1rIRgovhev2vaxiQ5ekf21.png',
            'image' => 'image',
            // 'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55275.18948853619!2d31.18964315!3d30.016788299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1695471231297!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'shipping' => 50,
        ]);
    }
}
