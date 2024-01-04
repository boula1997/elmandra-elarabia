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
                        // 1
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 2
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 3
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 4
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 5
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",
                        // 6
                        "Tractor unit",
                        "Semi-trailer",
                        "Truck",
                        "Tipper",
                        "Trailer",
                        "Mixer",

                    ];

        $title_ar = [
                        // 1
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 2
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 3
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 4
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 5
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                        // 6
                        "وحدة جرار",
                        "شبه مقطورة",
                        "شاحنة",
                        "قلاب",
                        "جَرَّار",
                        "خلاط",
                    ];  



        $images = [
                    // 1
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    // 2
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    // 3
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    // 4
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    // 5
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    // 6
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",
                    "images/VMDI1Vm3xP98PE5uLDHVwJrkHghCksca957gizea.jpg",

                  
                    ];

                    $y=0;
        for ($i = 0; $i < count($title_ar); $i++) {
            if($i%6==0){
                $y++;
            }
            $category = Category::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'company_id'=>$y,
            ]);
            $category->file()->create(["url"=>$images[$i]]);
        }
    }
}