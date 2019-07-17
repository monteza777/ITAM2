<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(ServerSeed::class);
        $this->call(ServerDetailSeed::class);
        $this->call(DataCenterSeed::class);
        $this->call(NetworkManagementSeed::class);
        $this->call(PlatformSeed::class);

    }
}
