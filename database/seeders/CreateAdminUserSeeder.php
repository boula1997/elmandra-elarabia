<?php
  
namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Seller;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Marketer;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = Admin::create([
            'name' => 'Super Admin', 
            'email' => 'admin@gmail.com',
            'phone' => '01126785910',
            'password' => bcrypt('123456789'),
            'type'=>'Admin'
        ]);
        
        $seller = Admin::create([
            'name' => 'Ahmed Atef', 
            'email' => 'ahmed@gmail.com',
            'phone' => '01126785310',
            'password' => bcrypt('123456789'),
            'type'=>'Seller'
        ]);
    
        $marketer = Admin::create([
            'name' => 'Sayed Mohamed', 
            'email' => 'sayed@gmail.com',
            'phone' => '01176785340',
            'password' => bcrypt('123456789'),
            'type'=>'Marketer',
        ]);
        
        $role1 = Role::create(['name' => 'admin','guard_name'=>'admin']);
        $role2 = Role::create(['name' => 'seller','guard_name'=>'admin']);
        $role3 = Role::create(['name' => 'marketer','guard_name'=>'admin']);
     
        $permissions1 = Permission::pluck('id','id')->all();
        $permissions2 = Permission::pluck('id','id')->all();
        $permissions3 = Permission::pluck('id','id')->all();
        
   
        $role1->syncPermissions($permissions1);
        $role2->syncPermissions($permissions2);
        $role3->syncPermissions($permissions3);
     
        $marketer->assignRole([$role3->id]);
        $user->assignRole([$role1->id]);
        $seller->assignRole([$role2->id]);
    }
}