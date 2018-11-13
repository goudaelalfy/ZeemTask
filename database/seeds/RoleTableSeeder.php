<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\ModelHasRole;
use App\Models\ModelHasPermission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roles = [
           'Administrators',
        ];


        foreach ($roles as $role) {
             Role::create(['name' => $role]);
             ModelHasRole::create(['model_type' => 'App\User', 'role_id' => '1', 'model_id' => '1']);
        }
        
        $permission_rows = Permission::get();
        
        foreach ($permission_rows as $permission_row) {
             ModelHasPermission::create(['model_type' => 'App\User', 'permission_id' => $permission_row->id, 'model_id' => '1' ]);
        }
    }
}
