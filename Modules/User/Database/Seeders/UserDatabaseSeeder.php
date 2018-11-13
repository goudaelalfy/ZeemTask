<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table("user")->delete();
        
        $elements = [
            ['id' => 1, 'email' => 'Admin', 'password' =>bcrypt('Password') , 'name' => 'Administrator', 'created_by' => '1'],
            ];

        foreach($elements as $element){
            User::create($element);
        }
    }
}
