<?php

use Illuminate\Database\Seeder;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'name' => 'webmaster',
            'display_name' => 'Web Master',
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()')
        ]);

        DB::table('user_roles')->insert([
            'name' => 'user',
            'display_name' => 'User',
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()')
        ]);
    }
}
