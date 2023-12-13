<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        $code = ["new2023","modern15","Get30"];
        $marketer_id = [1,1,1];
        $discount=[10,20,30];
      

        for ($i = 0; $i < count( $code ); $i++) {
            $Coupon_Translation = Coupon::create([
                'code'=> $code[$i],
                'marketer_id'=> $marketer_id[$i],
                'discount'=> $discount[$i],
            ]);
        }
    }
}
