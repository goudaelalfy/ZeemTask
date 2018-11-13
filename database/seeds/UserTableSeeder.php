<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        
        $elements = [
            ['id' => 1, 'email' => 'Admin', 'password' =>bcrypt('Password') , 'name' => 'Administrator'],
            ];

        foreach($elements as $element){
            User::create($element);
        }
    }
}
