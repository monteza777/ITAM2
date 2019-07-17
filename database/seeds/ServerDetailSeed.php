<?php

use Illuminate\Database\Seeder;

class ServerDetailSeed extends Seeder
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
            'product' => 'X',
            'organization' => 'System Engineer',
            'os_version' => 'RHEL 6.9',
            'brand' => 'DELL',
            'model' => 'Dell R620',
            'asset_tag' => 'FWFCKY1',
            'license' => 'iDRAC7 Enterprise License',
            'serial' => 'FWFCKY1',
            'cpu' => '2x Intel Xeon E5-2697 - 2.7 GHZ',
            'ram' => '256 GB',
            'disks_type' => '2x 300GB 15K - 5x 900GB 10K',
            'disks_free_pe' => '37 GB'
            ],
        ];

        foreach ($items as $item) {
            \App\ServerDetails::create($item);
        }
    }
}
