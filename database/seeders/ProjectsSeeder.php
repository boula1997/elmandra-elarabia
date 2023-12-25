<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
                        "Milestones in Motion",
                        "Our Trail of Triumphs",
                        "Journeys of Achievement",
                        "Projects that Move Nations",
                        "Roads Traveled, Success Unveiled",
                        "Tracks of Triumph",
                    ];

        $subtitle_en = [
                        "Highlighting Our Signature Projects",
                        "A Chronicle of Successful Deliveries",
                        "Milestones etched in Every Mile",
                        "Showcasing Impactful Expeditions",
                        "Efficiency Redefined, Projects Refined",
                        "Where Excellence Hits the Road",
                        ];

        $description_en = [
                               null,null,null,null,null,null,
                            ];

        
        $title_ar = [
                           "معالم في الحركة",
                           "درب انتصاراتنا ",
                           "رحلات الإنجاز",
                           "مشاريع تحرك الأمم",
                           "قطعت الطرق، وكشف النجاح",
                           "مسارات النصر",
                    ];

        $subtitle_ar =[ 
                           "تسليط الضوء على مشاريعنا المميزة",
                           "سجل عمليات التسليم الناجحة",
                           "معالم محفورة في كل ميل",
                           "عرض الرحلات الاستكشافية المؤثرة",
                           "إعادة تعريف الكفاءة، تحسين المشاريع",
                           "حيث يصل التميز إلى الطريق",
                        ];

        $description_ar =[
                            null,null,null,null,null,null,
                        ];
 
        $image=[
                  "images/s35Hwp3WYoNtgIEChT9CRtzGtFbJLoBu1FJHgccB.jpg",
                  "images/K1mqVBW4FF3SJmPkVhL5adGN92uPouWrbrNQNqGr.jpg",
                  "images/KvTaJhdrbcwaSDr1Rhkl964JrovLOXvYaFFnvOsE.jpg",
                  "images/spO5ZXyMhBe4PvVJfAXTqGfo8SujyEAH97iJPxn5.jpg",
                  "images/Ymys98vejHhWlGiEgylH9kVcgVHOnzS928WF7XPe.jpg",
                  "images/mYd9CJSF1vnm7lLu33qDwOvgR5Yjjps8vNusr6fB.jpg",
                ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $project = Project::create([
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
            $project->file()->create(["url"=>$image[$i]]);
          }
    }
}
