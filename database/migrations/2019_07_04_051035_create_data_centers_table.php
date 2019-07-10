<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('server_id');
            $table->string('datacenter_link')->nullable();
            $table->string('location')->nullable();
            $table->string('rack_unit')->nullable();
            $table->string('position')->nullable();
            $table->string('pdu_a_position')->nullable();
            $table->string('pdu_b_position')->nullable();
            $table->string('cage_key_code')->nullable();
            $table->string('smarthand_request')->nullable();
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
        Schema::dropIfExists('data_centers');
    }
}
