<?php

use Illuminate\Database\Seeder;

class PlatformSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
        ['id' => 1, 
            'server_id' => '1',
            'mounted_platforms' => '32',
            'sftp_directories' => '/mnt/alant-ld_ulbridge-posttrade/sftp | /mnt/dzb-ld_ulbridge-posttrade/sftp',
            'sftp_client_pass' => 'X'
            ],
        ];

        foreach ($items as $item) {
            \App\Platform::create($item);
        }
    }
}
