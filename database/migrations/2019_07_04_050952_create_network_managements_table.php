<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworkManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('server_id');
            $table->string('ip_address')->nullable();
            $table->string('remote_console_ip')->nullable();
            $table->string('dns')->nullable();
            $table->string('interfaces')->nullable();
            $table->string('eth0')->nullable();
            $table->string('eth1')->nullable();
            $table->string('mounted_vips')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('network_managements');
    }
}
