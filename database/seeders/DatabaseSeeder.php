<?php

namespace Database\Seeders;

use App\Http\Requests\Dashboard\OrderproductRequest;
use App\Models\Admin;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            MessagesSeeder::class,
            NewslettersSeeder::class,
            FeaturesSeeder::class,
            ContactsSeeder::class,
            CountersSeeder::class,
            PagesSeeder::class,
            SlidersSeeder::class,
            CategorySeeder::class,
            CompaniesSeeder::class,
            ProductSeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            SettingSeeder::class,
            PartnerSeeder::class,
            TeamSeeder::class,
            TestimonialsSeeder::class,
            UsersSeeder::class,
            AdvantagesSeeder::class,
            AdvertisementsSeeder::class,
            ServiceSeeder::class,
            FaqsSeeder::class,
            BenefitsSeeder::class,
            ProjectsSeeder::class,
            ProcessesSeeder::class,
        ]);
        
    }
}
