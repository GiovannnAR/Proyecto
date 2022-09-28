<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_ti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('equipment_id')->references('id')->on('equipment_ti');
            $table->foreignId('brand_id')->references('id')->on('brands');            
            $table->string('picture')->default('equipment.jpg');
            $table->string('hostname');
            $table->string('serial_number');
            $table->string('model');
            $table->string('description');
            $table->string('node');
            $table->foreignId('patch_panel_id')->references('id')->on('patch_panel');   
            $table->foreignId('switch_id')->references('id')->on('switch');
            $table->date('warranty_start');
            $table->date('warranty_final');
            $table->string('mac_wifi');
            $table->string('mac_ethernet');
            $table->string('ip_address');
            $table->string('teamViewer');
            $table->string('imei');
            $table->integer('mobile_account');
            $table->string('memory');
            $table->string('hdd');
            $table->string('processor');
            $table->string('os');
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
        Schema::dropIfExists('inventory_ti');
    }
}
