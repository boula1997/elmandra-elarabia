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
                'copyright' => 'Copyright reserved by EL ALAMIA GAMES  © 2023',
                'title' => 'EL ALAMIA GAMES ',
                'address' => '3 Al -Ataba Square - Abdel Shafi’i Mall - First Round',
                'description' => 'We are a gaming store company that specializes with entertainment products to a targeted the talent gammer.',
                'meta_data' => 'Gaming store Company',
            ],
            'ar' => [
                'appointment1' => ': 24/7',
                'copyright' => 'جميع الحقوق محفوظة لدي العالمية جيمز © 2023 ',
                'title' => ' العالمية جيمز ',
                'address' => '3ميدان العتبة-مول عبدالشافى-الدور الاول',
                'description' => 'نحن شركة متجر ألعاب متخصصة في المنتجات الترفيهية التي تستهدف اللاعبين الموهوبين.',
                'meta_data' => 'شركة خدمات الالعاب',
            ],
            'logo' => 'images/R0gL2w01vCeRsY1W11kzWgVi8QKTIoLAqZbtxNjv.png',
            'white_logo' => 'images/R0gL2w01vCeRsY1W11kzWgVi8QKTIoLAqZbtxNjv.png',
            'tab' => 'images/R0gL2w01vCeRsY1W11kzWgVi8QKTIoLAqZbtxNjv.png',
            'image' => 'image',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55275.18948853619!2d31.18964315!3d30.016788299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1695471231297!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }
}
