<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            ['name' => 'addBlog', 'guard_name' => 'web'],
            ['name' => 'updateBlog', 'guard_name' => 'web'],
            ['name' => 'showBlog', 'guard_name' => 'web'],
            ['name' => 'deleteBlog', 'guard_name' => 'web'],

            ['name' => 'showBill', 'guard_name' => 'web'],

            ['name' => 'showVoucher', 'guard_name' => 'web'],
            ['name' => 'addVoucher', 'guard_name' => 'web'],
            ['name' => 'updateVoucher', 'guard_name' => 'web'],
            ['name' => 'deleteVoucher', 'guard_name' => 'web'],

            ['name' => 'showBanner', 'guard_name' => 'web'],
            ['name' => 'addBanner', 'guard_name' => 'web'],
            ['name' => 'updateBanner', 'guard_name' => 'web'],
            ['name' => 'deleteBanner', 'guard_name' => 'web'],

            ['name' => 'showProduct', 'guard_name' => 'web'],
            ['name' => 'addProduct', 'guard_name' => 'web'],
            ['name' => 'updateProduct', 'guard_name' => 'web'],
            ['name' => 'deleteProduct', 'guard_name' => 'web'],

            ['name' => 'showBrand', 'guard_name' => 'web'],
            ['name' => 'addBrand', 'guard_name' => 'web'],
            ['name' => 'updateBrand', 'guard_name' => 'web'],
            ['name' => 'deleteBrand', 'guard_name' => 'web'],

            ['name' => 'showCategory', 'guard_name' => 'web'],
            ['name' => 'addCategory', 'guard_name' => 'web'],
            ['name' => 'updateCategory', 'guard_name' => 'web'],
            ['name' => 'deleteCategory', 'guard_name' => 'web'],

            ['name' => 'showAccount', 'guard_name' => 'web'],
            ['name' => 'addAccount', 'guard_name' => 'web'],
            ['name' => 'updateAccount', 'guard_name' => 'web'],
            ['name' => 'deleteAccount', 'guard_name' => 'web'],
        ];

        foreach ($permissions as $item) {
            Permission::updateOrCreate($item);
        }

     
        $superAdmin = User::updateOrCreate([
            'email' => 'admin@example.com',
        ], [
            'username' => 'admin',
            'fullname' => 'Quản trị',
            'password' => Hash::make('12345678'),
            'phone' => '0363108663',
            'address' => "Ha Noi",
            'role' => 1,
            'active' => 1 
        ]);

    
        $permissions = Permission::all();


        $superAdmin->syncPermissions($permissions);
    }
}
