<?php

use Illuminate\Database\Seeder;

use App\Model\Account\UserRole; 

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::create([
            'name' => 'webmaster',
            'display_name' => 'Web Master'
        ]);
        UserRole::create([
            'name' => 'user',
            'display_name' => 'User'
        ]);
    }
}
