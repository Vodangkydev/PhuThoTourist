<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourismServicesTable extends Migration
{
    public function up()
    {
        Schema::create('tourism_services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->text('description')->nullable(); 
            $table->string('image_url')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tourism_services');
    }
};
