<?php

use Illuminate\Database\Seeder;

class NetworkManagementSeed extends Seeder
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
            'ip_address' => '192.168.184.12',
            'remote_console_ip' => '192.168.100.62',
            'dns' => 'ld-tlh-srv-prd-12.ullink.net',
            'interfaces' => 'eth0, eth1, eth2, eth3, bond0',
            'eth0' => 'LD-TLH-SW-N5KA Gi0/1',
            'eth1' => 'LD-TLH-SWI-N5KB Gi0/1',
            'mounted_vips' => 'vip_seb-ld_ulbridge-sellside-itx | vip_seb-ld_ulbridge-ulnetplus-itx'
            ],
        ];

        foreach ($items as $item) {
            \App\NetworkManagement::create($item);
        }
    }
}
