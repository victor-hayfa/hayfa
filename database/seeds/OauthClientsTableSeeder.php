<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OauthClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            'name' => 'Laravel Personal Access Client',
            'secret' => 'AbmAv7ZeBSfc8QIITUFbCCZEYlTXBEbigshFe4PO',
            'redirect' => 'http://localhost',
            'personal_access_client' => 1,
            'password_client' => 0,
            'revoked' => 0,
            'created_at' => Carbon::now()
        ], [
            'name' => 'Laravel Password Grant Client',
            'secret' => '1ND74XKESUPzS54DUN8SpYxmEGLdpsoiCRbrNH8Z',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
            'created_at' => Carbon::now()
        ]);
    }
}
