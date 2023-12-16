<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $title_en = [
                      
                    // Fruits
                    "Apple",
                    "Banana",
                    // Vegetables
                    "Tomato",
                    "Cucumber",
                    // Herbs
                    "Thyme",
                    "Lemongrass",
                    // Organic Produce
                    "Organic fruits",
                    "Organic vegetables",
                    // Exotic and Specialty Produce
                    "Asian greens (bok choy, Chinese cabbage)",
                    "Specialty mushrooms (shiitake, oyster, portobello)",
                      
                    // Beef
                    "Steaks (ribeye, sirloin, filet mignon)",
                    "Ground beef",
                    // Poultry
                    "Chicken (whole, breasts, thighs, drumsticks)",
                    "Duck",
                    // Deli Meats
                    "Turkey breast",
                    "Roast beef",
                    // Lamb
                    "Lamb chops",
                    "Lamb leg",
                    // Seafood
                    "Shrimp",
                    "Lobster",
                    // Milk
                    "Whole milk",
                    "Reduced-fat milk",
                    // Cheese
                    "Cheddar",
                    "Mozzarella",
                    // Yogurt
                    "Regular yogurt",
                    "Dairy-free yogurt alternatives",
                    // Butter and Margarine
                    "Salted butter",
                    "Spreadable butter",
                    // Eggs
                    "Chicken eggs (white, brown)",
                    "Organic eggs",   
                    // Bread
                    "Sliced bread (white, whole wheat, multigrain)",
                    "Baguettes",
                    // Pastries
                    "Croissants",
                    "Muffins",
                    // Cakes
                    "Layer cakes (chocolate, vanilla, red velvet)",
                    "Birthday cakes",
                    // Cookies
                    "Chocolate chip cookies",
                    "Peanut butter cookies",
                    // Pies and Tarts
                    "Fruit tarts",
                    "Custard tarts",
                    // Frozen Fruits and Vegetables
                    "Mixed berries",
                    "Sliced strawberries",
                    // Frozen Meals and Entrees
                    "Frozen lasagna",
                    "Frozen burritos",
                    // Frozen Meat and Seafood
                    "Frozen chicken breasts",
                    "Frozen fish fillets",
                    // Frozen Breakfast Items
                    "Frozen breakfast burritos",
                    "Frozen French toast sticks",
                    // Frozen Snacks and Appetizers
                   "Frozen onion rings",
                    "Frozen mozzarella sticks",
                    // Grains and Cereals
                    "Rice (white, brown, basmati, jasmine)",
                    "Pasta (spaghetti, penne, macaroni)",
                    // Baking Supplies
                    "Flour (all-purpose, whole wheat, cake flour)",
                    "Sugar (granulated, brown sugar, powdered sugar)",
                    // Cooking Oils and Vinegars
                    "Olive oil",
                    "Vegetable oil",
                    // Sauces, Condiments, and Spreads
                    "Ketchup",
                    "Mayonnaise",
                    // Canned Goods
                    "Canned fruits",
                    "Canned tuna",   
                    // Water
                    "Acqua Panna",
                    "Cano Water",
                    // Milk
                    "Milky Way",
                    "Holy Cow Milk",
                    // Carbonated drinks
                    "Pepsi",
                    "coca cola",
                    // Juice and plant drinks
                    "Juicy Lucy",
                    "Smitten Smoothies",
                    // Beer
                    "Wheat beer",
                    "Brown ale",  
                    // Carpet Cleaners
                    "Bridgepoint Bio Break With Citrus Solv 2.72Kg.",
                    "Bridgepoint Cleaning Booster Citrus Solv II 3.78L.",
                    // Dish Detergent & Soap
                    "Feba Dish Cleaner, 4 kg with 2 kg extra",
                    "Max Clean Liquid Dish Wash with Lemon Scent - 10 Kg",
                    // Glass & Surface Cleaners
                    "Glass Storage Jar, Le Parfait",
                    "Glow power glass cleaner 500ml with lavnder",
                    // Floor Cleaners
                    "Maxell Magic Floor Cleaner with Winter Ice Scent - 1 Liter",
                    "Dettol morning dew disinfectant surface spray - 450 ml",
                    // Oven & Grill Cleaners
                    "Dettol Orange Healthy Kitchen Power Cleaner Spray 500Ml",
                    "Clorox Kitchen Cleaner Lemon 500ML",
                    // Booster Seats
                    "Health Care Booster Seat with rainforest toy PINK",
                    "Nania I-Max SP Racing Car Seat for Kids - Red and Black",
                    // Bottle-Feeding
                   "Bubbles natural feeding bottle without hand 280 ml - white",
                    "Chicco Well-Being Plastic Bottle, 150 ml, Blue (0m+)", 
                    // Breastfeeding
                   "Nipple shields. ",
                    "Nursing pads and nursing soothies.", 
                    // Feeding Accessories
                   "Newborns Dropper Anti-Choke Nutrition and Medicine Swirls • Feeding Sponge • Bowl• Blue",
                    "Chicco Soft and Dream Baby Carrier 3 position", 
                    // Food Mills
                    "Passoire/Sieve",
                    "Potato Ricer - Stainless Steel",
                    // Casual Wear
                    "Printonline Unisex Zip Hoodie Sweatshirt",
                    "Mobaco Men Regular Fit Polo Shirt",
                    // Formal Attire
                   "Boss Suits H-Jeckson",
                    "Boss Suits T-Harvers", 
                    // Sportswear
                   "Mobaco Men",
                    "Hero Basic Mens Round Neck Short Sleeve Plain Undershirt", 
                    // Outerwear
                    "Boss Outerwear J_Sarek",
                    "Boss Outerwear",  
                    // Active Wear
                    "Sport Top - Long Sleeve Crew Neck Sport T-shirt - Sport T-shirt - Women",
                    "Athlete Sportive Training T-Shirt",   
                    // Apple
                    "Apple iPhone 14 ",
                    "Apple iPhone 12 ", 
                    // Samsung
                    "Samsung Galaxy S23 Ultra",
                    "Samsung Galaxy A04s", 
                    // Huawei
                    "Huawei Nova 10 SE",
                    "HUAWEI nova Y61 Smartphone",
                    // Xiaomi
                    "Redmi Note 12 Dual SIM",
                    "Realme C21 Y",  
                    // Sony
                    "Honor X9a Dual SIM",
                    "Nokia x30 5g smartphone",
                    ];



        $title_ar = [    
            // الفاكهة
            "تفاحة",
            "موز",
            // خضروات
            "طماطم",
            "خيار",
            // أعشاب
            "زعتر",
            "عشب الليمون",
           // المنتجات العضوية
            "الفواكه العضوية",
            "خضروات عضوية",
            // المنتجات الغريبة والمتخصصة
            "الخضر الآسيوية (بوك تشوي، الملفوف الصيني)",
            "الفطر المميز (شيتاكي، المحار، بورتوبيللو)",
             
            // لحم
            "شرائح اللحم (ريب آي، لحم الخاصرة، سمك فيليه)",
            "اللحم المفروم",
            // دواجن
            "دجاج (كامل، صدور، أفخاذ، أفخاذ)",
            "بطة",
            // اللحوم الباردة
            "صدور الديك الرومي",
            "لحم البقر المشوي",
            // حمَل
            "شرائح لحم الضأن",
            "ساق الضأن" ,
            // مأكولات بحرية
            "جمبري",
            "سرطان البحر",
            // لبن
            "حليب صافي",
            "الحليب قليل الدسم",
            // جبنه
            "شيدر",
            "موزاريلا",
            // زبادي
            "الزبادي العادي",
            "بدائل الزبادي الخالية من الألبان",
            // الزبدة والسمن
            "الزبدة المملحة",
            "زبدة قابلة للدهن",
            // بيض
            "بيض الدجاج (أبيض، بني)",
            "البيض العضوي",
            // خبز
            "شرائح الخبز (الأبيض، القمح الكامل، الحبوب المتعددة)",
            "الرغيف الفرنسي",
            // معجنات
            "كرواسون",
            "الكعك",
            // كيك
            "طبقات الكيك (شوكولاتة، فانيليا، ريد فيلفيت)",
            "كعك عيد ميلاد",
            // بسكويت
            "كوكيز رقائق الشوكولاتة",
            "بسكويت زبدة الفول السوداني",
            // الفطائر والفطائر
            "فطائر الفاكهة" ,
            "فطائر الكاسترد",
            // الفواكه والخضروات المجمدة
            "التوت المختلطة",
            "الفراولة المقطعة",
            // الوجبات والمقبلات المجمدة
            "لازانيا مجمدة",
            "البوريتو المجمدة",
            // اللحوم المجمدة والمأكولات البحرية
            "صدور الدجاج المجمدة",
            "شرائح السمك المجمدة",
            // عناصر الإفطار المجمدة
            "بوريتو الإفطار المجمدة",
            "عصي الخبز المحمص الفرنسي المجمدة",
            // الوجبات الخفيفة والمقبلات المجمدة
           "حلقات البصل المجمدة",
            "أصابع الموزاريلا المجمدة",
            // الحبوب والحبوب
            "أرز (أبيض، بني، بسمتي، ياسمين)",
            "المعكرونة (السباغيتي، بيني، المعكرونة)",
            // لوازم الخبز
            "الدقيق (جميع الأغراض، القمح الكامل، دقيق الكيك)",
            "السكر (السكر الحبيبي، السكر البني، السكر البودرة)",
            // زيوت الطبخ والخل
            "زيت الزيتون",
            "زيت نباتي",
            // الصلصات والتوابل، وينتشر
            "كاتشب",
            "مايونيز",
            // البضائع المعلبة
            "الفواكه المعلبة",
            "التونة المعلبة",
            // ماء
            "أكوا بانا",
            "ماء كانو",
            // لبن
            "درب التبانة",
            "حليب البقر المقدس",
            // المشروبات الكربونية
            "بيبسي",
            "كوكا كولا",
            // العصائر والمشروبات النباتية
            "جوسي لوسي" ,
            "عصائر سمايتن" ,
            // جعة
            "بيره الشعير",
            "البيرة البنية",
            // منظفات السجاد
            "بريدج بوينت بيو بريك بالحمضيات 2.72 كجم.",
            "معزز التنظيف Bridgepoint Citrus Solv II 3.78 لتر.",
            // منظف الأطباق والصابون
            "منظف أطباق فيبا، 4 كيلو مع 2 كيلو إضافية",
            "سائل غسيل الأطباق ماكس كلين برائحة الليمون - 10 كجم",
            // منظفات الزجاج والأسطح
            "جرة تخزين زجاجية، لو بارفيه",
            "منظف الزجاج جلو باور 500 مل باللافندر",
            // منظفات الأرضيات
            "منظف الارضيات ماكسيل ماجيك برائحة الثلج الشتوي - 1 لتر",
            "ديتول بخاخ مطهر للأسطح بندى الصباح - 450 مل",
            // منظفات الفرن والشواية
            "ديتول بخاخ منظف المطبخ الصحي بالبرتقال 500 مل",
            "كلوركس منظف المطبخ بالليمون 500 مل",
            // مقاعد معززة
            "مقعد معزز للعناية الصحية مع لعبة الغابات المطيرة باللون الوردي",
            "مقعد سيارة السباق للأطفال آي ماكس إس بي من نانيا - أحمر وأسود",
            // زجاجة الرضاعة
           "ببرونة بابلز ناتشورال بدون يد 280 مل - ابيض",
            "شيكو ويل بينج، زجاجة بلاستيك، 150 مل، أزرق (من الولادة فما فوق)",
            // الرضاعة الطبيعية
           "دروع الحلمة",
            "فوط الرضاعة ومهدئات الرضاعة.",
            // ملحقات التغذية
           "قطارة الأطفال حديثي الولادة المضادة للاختناق ودوامات طبية • إسفنجة تغذية • وعاء • أزرق",
            "شيكو سوفت اند دريم بيبي كارير 3 وضعيات",
            // مطاحن الغذاء
            "باسواير/غربال",
            "مضرب بطاطس - ستانلس ستيل",
            // لباس غير رسمي
            "برينتونلاين للجنسين الرمز البريدي هوديي البلوز",
            "قميص بولو للرجال ذو قصة عادية من Mobaco",
            // بالزي الرسمي
           "بوس يناسب إتش جاكسون",
            "بوس يناسب تي هارفرز",
            // ملابس رياضية
           "رجال موباكو",
            "Hero Basic للرجال Round Nec",
            // ملابس خارجية
            "الملابس الخارجية بوس J_ساريك",
            "ملابس خارجية بوس",
            // ملابس نشطة
            "بلوزة رياضية - تي شيرت رياضي بأكمام طويلة ورقبة دائرية - تي شيرت رياضي - للنساء",
            "تيشيرت التدريب الرياضي",
            // تفاحة
            "آيفون 14",
            "آيفون 12",
            // سامسونج
            "سامسونج جالاكسي اس 23 الترا",
            "سامسونج جالاكسي A04s",
            // هواوي
            "هواوي نوفا 10 إس إي",
            "هاتف هواوي نوفا Y61 الذكي",
            // شاومى
            "ريدمي نوت 12 ثنائي الشريحة",
            "ريلمي سي21 واي",
            // سوني
            "هونر X9a ثنائي الشريحة",
            "هاتف نوكيا x30 5g الذكي",

                  
        ];  




        $images = [
                       // Fruits
                       "images/JR0ZyMsKqVaaf8ed3rodChITA2elnZSTmEK4E71L.jpg",
                       "images/37GrXGWtUVa06jbhGWapMLS0GnEqX3bKvSuNAqsW.jpg",
                       // Vegetables
                       "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                       "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                       // Herbs
                       "images/N7fjzxAN1n2nPNQQbnCgaFB7zg1YzVB7bYYTkrTj.jpg",
                       "images/MZsxRQfhUJxZ1SDSdl8PIUaXTQgB8U6yykqUDow1.jpg",
                       // Organic Produce
                       "images/MOnDv42HFfh1KUSqgXuawqWYBXxeAycGYj3rrNF6.jpg",
                       "images/coQvnXwJEFo4Ld5D5sTcT8VpAyIY8Bcac5SiebXC.jpg",
                       // Exotic and Specialty Produce
                       "images/HoAcPPzk3P2uP9nrZHOHh6aTNBlsmbpkalFysJSL.jpg",
                       "images/uN7Phxdxf2TwMwjHlPV8itXbg7yqecpYwYy6vDX6.png",
                         
                       // Beef
                       "images/EeRakHXr9Ork92EdaFnDklWivoltFLMPGYYn5EQH.jpg",
                       "images/Q8fcUBMSBcHAh9loC2WLEH66RcvRLho4ursUAEhK.jpg",
                       // Poultry
                       "images/sWzQHDSe6RXonBxDymaImupNYJKR7uDjzrihxMff.webp",
                       "images/EtRm0rwOHHMY06s2RhuzAYUALJ8xtEhVKw6rHSVP.avif",
                       // Deli Meats
                       "images/rVFtDcc3DxCbrW0UcQK8XfoLmBqpOJ51I2qOo3kv.jpg",
                       "images/74Yl7bN7jUx4RdtSMHr9Qa0nQFK9JFtezw3NSvdO.jpg",
                       // Lamb
                       "images/DmkVKJFGmfHwFSU5vSJiIzF19tQNKIlYPuI7cOI8.jpg",
                       "images/pEWHLCoXg1ZWWWGfV5YNnydxieDQM9q453woaB1G.webp",
                       // Seafood
                       "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                       "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                       // Milk
                       "images/1wtO0bDHUrcqJhydf31IR6Vx2hvrUgpWrjsN0CEv.webp",
                       "images/6835OM5zDXJ1HK6m00FvPiGha6pf61A9gwt9WBp2.avif",
                       // Cheese
                       "images/HoAcPPzk3P2uP9nrZHOHh6aTNBlsmbpkalFysJSL.jpg",
                       "images/uN7Phxdxf2TwMwjHlPV8itXbg7yqecpYwYy6vDX6.png",
                         
                       // Yogurt
                       "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                       "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                       // Butter and Margarine
                       "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                       "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                       // Eggs
                       "images/sWzQHDSe6RXonBxDymaImupNYJKR7uDjzrihxMff.webp",
                       "images/EtRm0rwOHHMY06s2RhuzAYUALJ8xtEhVKw6rHSVP.avif",   
                       // Bread
                       "images/sWzQHDSe6RXonBxDymaImupNYJKR7uDjzrihxMff.webp",
                       "images/EtRm0rwOHHMY06s2RhuzAYUALJ8xtEhVKw6rHSVP.avif",
                       // Pastries
                       "images/sWzQHDSe6RXonBxDymaImupNYJKR7uDjzrihxMff.webp",
                       "images/EtRm0rwOHHMY06s2RhuzAYUALJ8xtEhVKw6rHSVP.avif",
                       // Cakes
                       "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                       "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                       // Cookies
                       "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                       "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                       // Pies and Tarts
                       "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                       "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                       // Frozen Fruits and Vegetables
                       "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                       "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                        // Yogurt
                        "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                        "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                        // Cakes
                        "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                        "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                        // Cookies
                        "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                        "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                        // Pies and Tarts
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                        // Frozen Fruits and Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                         // Yogurt
                         "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                         "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                        // Fruits
                        "images/JR0ZyMsKqVaaf8ed3rodChITA2elnZSTmEK4E71L.jpg",
                        "images/37GrXGWtUVa06jbhGWapMLS0GnEqX3bKvSuNAqsW.jpg",
                        // Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                        // Herbs
                        "images/N7fjzxAN1n2nPNQQbnCgaFB7zg1YzVB7bYYTkrTj.jpg",
                        "images/MZsxRQfhUJxZ1SDSdl8PIUaXTQgB8U6yykqUDow1.jpg",
                        // Organic Produce
                        "images/MOnDv42HFfh1KUSqgXuawqWYBXxeAycGYj3rrNF6.jpg",
                        "images/coQvnXwJEFo4Ld5D5sTcT8VpAyIY8Bcac5SiebXC.jpg",
                        // Exotic and Specialty Produce
                        "images/HoAcPPzk3P2uP9nrZHOHh6aTNBlsmbpkalFysJSL.jpg",
                        "images/uN7Phxdxf2TwMwjHlPV8itXbg7yqecpYwYy6vDX6.png",
                          
                        // Beef
                        "images/EeRakHXr9Ork92EdaFnDklWivoltFLMPGYYn5EQH.jpg",
                        "images/Q8fcUBMSBcHAh9loC2WLEH66RcvRLho4ursUAEhK.jpg",
                        // Poultry
                        "images/sWzQHDSe6RXonBxDymaImupNYJKR7uDjzrihxMff.webp",
                        "images/EtRm0rwOHHMY06s2RhuzAYUALJ8xtEhVKw6rHSVP.avif",
                        // Frozen Fruits and Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                         // Yogurt
                         "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                         "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                        // Fruits
                        "images/JR0ZyMsKqVaaf8ed3rodChITA2elnZSTmEK4E71L.jpg",
                        "images/37GrXGWtUVa06jbhGWapMLS0GnEqX3bKvSuNAqsW.jpg",
                        // Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                        // Herbs
                        "images/N7fjzxAN1n2nPNQQbnCgaFB7zg1YzVB7bYYTkrTj.jpg",
                        "images/MZsxRQfhUJxZ1SDSdl8PIUaXTQgB8U6yykqUDow1.jpg",
                        // Organic Produce
                        "images/MOnDv42HFfh1KUSqgXuawqWYBXxeAycGYj3rrNF6.jpg",
                        "images/coQvnXwJEFo4Ld5D5sTcT8VpAyIY8Bcac5SiebXC.jpg",
                        // Exotic and Specialty Produce
                        "images/HoAcPPzk3P2uP9nrZHOHh6aTNBlsmbpkalFysJSL.jpg",
                        "images/uN7Phxdxf2TwMwjHlPV8itXbg7yqecpYwYy6vDX6.png",
                        // Frozen Fruits and Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                         // Yogurt
                         "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                         "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                        // Fruits
                        "images/JR0ZyMsKqVaaf8ed3rodChITA2elnZSTmEK4E71L.jpg",
                        "images/37GrXGWtUVa06jbhGWapMLS0GnEqX3bKvSuNAqsW.jpg",
                        // Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                        // Herbs
                        "images/N7fjzxAN1n2nPNQQbnCgaFB7zg1YzVB7bYYTkrTj.jpg",
                        "images/MZsxRQfhUJxZ1SDSdl8PIUaXTQgB8U6yykqUDow1.jpg",
                        // Organic Produce
                        "images/MOnDv42HFfh1KUSqgXuawqWYBXxeAycGYj3rrNF6.jpg",
                        "images/coQvnXwJEFo4Ld5D5sTcT8VpAyIY8Bcac5SiebXC.jpg",
                        // Exotic and Specialty Produce
                        "images/HoAcPPzk3P2uP9nrZHOHh6aTNBlsmbpkalFysJSL.jpg",
                        "images/uN7Phxdxf2TwMwjHlPV8itXbg7yqecpYwYy6vDX6.png", 
                        // Frozen Fruits and Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                         // Yogurt
                         "images/PcAmlFGHdmE1N4FP0xiloSHOYFMVC1dfF8ePnZot.jpg",
                         "images/0dxNiYZI32zZqg66vZ5Y84tqukLVBWoCVqXztDgq.webp",
                        // Fruits
                        "images/JR0ZyMsKqVaaf8ed3rodChITA2elnZSTmEK4E71L.jpg",
                        "images/37GrXGWtUVa06jbhGWapMLS0GnEqX3bKvSuNAqsW.jpg",
                        // Vegetables
                        "images/KLqjYjS3lrRQUOVfJbkwAos61bBJNe5PDNQC0LEq.jpg",
                        "images/weaI4QclnUHZ78l7H4PwWWx1aHCCnOjeV1Qf1Ppb.jpg",
                        // Herbs
                        "images/N7fjzxAN1n2nPNQQbnCgaFB7zg1YzVB7bYYTkrTj.jpg",
                        "images/MZsxRQfhUJxZ1SDSdl8PIUaXTQgB8U6yykqUDow1.jpg",
                        // Organic Produce
                        "images/MOnDv42HFfh1KUSqgXuawqWYBXxeAycGYj3rrNF6.jpg",
                        "images/coQvnXwJEFo4Ld5D5sTcT8VpAyIY8Bcac5SiebXC.jpg",
                        // Exotic and Specialty Produce
                        "images/HoAcPPzk3P2uP9nrZHOHh6aTNBlsmbpkalFysJSL.jpg",
                        "images/uN7Phxdxf2TwMwjHlPV8itXbg7yqecpYwYy6vDX6.png",

                  ];

                  
                $prices=   [100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,];
                $prices_bd=[100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,];
                $stock=    [100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,100,30,70,40,80,100,30,70,80,100,];

                $y=0;
        for ($i = 0; $i < count($title_ar); $i++) {
            if($i % 2 === 0){
                $y++;
        }
            $product = Product::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'subcategory_id'=>$y,
                'company_id'=>1,
                'price'=>$prices[$i],
                'price_bd'=>$prices_bd[$i],
                'stock'=>$stock[$i],

            ]);

            $product->file()->create(["url"=>$images[$i]]);
        }
    }
}
