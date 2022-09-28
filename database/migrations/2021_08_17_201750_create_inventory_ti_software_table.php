<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTiSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_ti_software', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('inventory_id')->references('id')->on('inventory_ti')->onDelete('cascade');
            $table->foreignId('software_id')->references('id')->on('software')->onDelete('cascade');
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
        Schema::dropIfExists('inventory_ti_software');
    }
}
