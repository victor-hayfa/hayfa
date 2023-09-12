<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_level')->insert([
            'name' => 'Administrador',
            'status' => true,
            'account_id' => 1,
            'created_at' => Carbon::now()
        ]);
    }
}
