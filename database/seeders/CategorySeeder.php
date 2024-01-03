<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
                        "Trucks",

                    ];

        $title_ar = [
                        "الشاحنات",
                    ];  



        $images = [
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    // "images/3YLvN9pOEiB76sAOjEGBwfKfsb8WHdacxUtJwbGs.jpg",
                    // "images/uYX3kVyoSh3B6mFzofJwyJDfTJBh6vd3z9TeNOzU.jpg",
                    // "images/j9pQW3VTqKQdVbOQikuYYPWQtbCQgcamlY4QMNrI.webp",
                    // "images/g2qexZhznYOpcFEqtlhmK8ujd1rzV77zLDNKQSMf.png",
                    // "images/lBrGZFdpn6t2XVuxg43IozyKOGlgDy6g22KSpREa.jpg",
                    // "images/YoKD3eY4Go9medsyhcBMxc1v6KOxl6zpUDzGTgw4.jpg",
                    // "images/g0AraDWao4LYqSjmJqEW2skMGvF7qJqI4y1W81X4.jpg",
                    // "images/99O9NLpVRGcCRWMEw8l1vACXFvdowYOvSM99fBRH.webp",
                    // "images/bfl0Lc9jIo2eSyQekCYw3FP5zo0BlenBFmlSKwzV.jpg",
                    // "images/fMfDdkvufJ6GnGpQ3Mo2a8c8Z1fjyV6Wu3xvOsxC.jpg",
                    ];


        for ($i = 0; $i < count($title_ar); $i++) {
            $category = Category::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'company_id'=>1,
            ]);

            $category->file()->create(["url"=>$images[$i]]);
        }
    }
}
