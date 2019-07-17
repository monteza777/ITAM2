<?php

use Illuminate\Database\Seeder;

class DataCenterSeed extends Seeder
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
            'datacenter_link' => 'https://itivitinet.itiviti.com/display/SYSPROD/LONDON-TELEHOUSE-Details',
            'location' => 'London Telehouse',
            'rack_unit' => '9',
            'position' => 'TFM150 - L6',
            'pdu_a_position' => 'Cable No. 5',
            'pdu_b_position' => 'Cable No. 25',
            'cage_key_code' => 'X',
            'smarthand_request' => 'X'
            ],
        ];

        foreach ($items as $item) {
            \App\DataCenter::create($item);
        }
    }
}
