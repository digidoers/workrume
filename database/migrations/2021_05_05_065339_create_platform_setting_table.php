<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platform_settings', function (Blueprint $table) 
        {
            $table->id(); 
            $table->string('key'); 
            $table->text('input_value'); 
            $table->boolean('is_require'); 
            $table->string('input_type'); 
            $table->string('label_name'); 
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
        Schema::dropIfExists('platform_settings');
    }
}
