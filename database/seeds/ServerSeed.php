<?php

use Illuminate\Database\Seeder;

class ServerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
        [	'id' => 1, 
            'server_name' => 'ld-tlh-srv-prd-12'],

        ];

        foreach ($items as $item) {
            \App\Server::create($item);
        }
    }
}
