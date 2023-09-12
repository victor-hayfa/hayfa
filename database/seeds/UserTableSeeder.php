<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cauê da Silva Nacci',
            'email' => 'cauenacci2@hotmail.com',
            'password' => md5('12345678'),
            'status' => true,
            'account_id' => 1,
            'level_id' => 1,
            'created_at' => Carbon::now()
        ], [
            'name' => 'Kaue Ribeiro',
            'email' => 'kaue@hotmail.com',
            'password' => md5('12345678'),
            'status' => true,
            'account_id' => 1,
            'level_id' => 1,
            'created_at' => Carbon::now()
        ]);
    }
}
