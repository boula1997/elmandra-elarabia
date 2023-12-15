<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**s
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
                        // Fresh Produce
                        "Fruits",
                        "Vegetables",
                        "Herbs",
                        "Organic Produce",
                        "Exotic and Specialty Produce",
                        // Meat and Seafood
                        "Beef",
                        "Poultry",
                        "Deli Meats",
                        "Lamb",
                        "Seafood",
                        // Dairy and Eggs
                        "Milk",
                        "Cheese",
                        "Yogurt",
                        "Butter and Margarine",
                        "Eggs",
                        // Bakery
                        "Bread",
                        "Pastries",
                        "Cakes",
                        "Cookies",
                        "Pies and Tarts",
                        // Frozen Foods
                        "Frozen Fruits and Vegetables",
                        "Frozen Meals and Entrees",
                        "Frozen Meat and Seafood",
                        "Frozen Breakfast Items",
                        "Frozen Snacks and Appetizers",
                        // Pantry Staples
                        "Grains and Cereals",
                        "Baking Supplies",
                        "Cooking Oils and Vinegars",
                        "Sauces, Condiments, and Spreads",
                        "Canned Goods",
                        // Beverages
                        "Water",
                        "Milk",
                        "Carbonated drinks",
                        "Juice and plant drinks",
                        "Beer",
            

                    ];



        $title_ar = [
                        // المنتجات الطازجة
                        "الفاكهة",
                        "خضروات",
                        "أعشاب",
                        "المنتجات العضوية",
                        "المنتجات الغريبة والمتخصصة",
                        // اللحوم والمأكولات البحرية
                        "لحم",
                        "دواجن",
                        "اللحوم الباردة",
                        "حمَل",
                        "مأكولات بحرية",
                        // الألبان والبيض
                        "لبن",
                        "جبنه",
                        "زبادي",
                        "الزبدة والسمن",
                        "بيض",
                        // مخبز
                        "خبز",
                        "المعجنات",
                        "كيك",
                        "بسكويت",
                        "الفطائر والتارت",
                        // الأطعمة المجمدة
                        "الفواكه والخضروات المجمدة",
                        "الوجبات والمقبلات المجمدة",
                        "اللحوم المجمدة والمأكولات البحرية",
                        "عناصر الإفطار المجمدة",
                        "الوجبات الخفيفة والمقبلات المجمدة",
                        // ستابلز المخزن
                        "الحبوب والحبوب",
                        "مستلزمات الخبز",
                        "زيوت الطبخ والخل",
                        "الصلصات والتوابل والأطعمة القابلة للدهن",
                        "البضائع المعلبة",
                        // المشروبات
                        "مياه",
                        "لبن",
                        "المشروبات الكربونية",
                        "العصائر والمشروبات النباتية",
                        "جعة",
                    ];  

                    $category_id=[5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,4,4,4,4,4];


// TODO(ibrahim): add subcategories to other categories

        // $images = [
        //             // "images/KCm7skKln2yd0wGNPpPif634tvV2tzDChNOCoGYU.webp",
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,null,null,null,null,null,
        //             null,null,null,null,null,
                 
        //             ];

                   
        for ($i = 0; $i < count($title_ar); $i++) {
            

            $subcategory = Subcategory::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'category_id'=>$category_id[$i],
            ]);
            // $subcategory->file()->create(["url"=>$images[$i]]);
          
           
           
        }
    }
}
