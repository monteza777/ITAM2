<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('server_id');
            $table->string('product')->nullable();
            $table->string('organization')->nullable();
            $table->string('os_version')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('asset_tag')->nullable();
            $table->string('license')->nullable();
            $table->string('serial')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('disks_type')->nullable();
            $table->string('disks_free_pe')->nullable();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('server_details');
    }
}
