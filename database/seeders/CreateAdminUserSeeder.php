<?php
  
namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Seller;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
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
    
        $role1 = Role::create(['name' => 'Admin','guard_name'=>'admin']);
        $role2 = Role::create(['name' => 'Seller','guard_name'=>'admin']);
     
        $permissions1 = Permission::pluck('id','id')->all();
        $permissions2 = Permission::pluck('id','id')->all();
   
        $role1->syncPermissions($permissions1);
        $role2->syncPermissions($permissions2);
     
        $user->assignRole([$role1->id]);
        $seller->assignRole([$role2->id]);
    }
}