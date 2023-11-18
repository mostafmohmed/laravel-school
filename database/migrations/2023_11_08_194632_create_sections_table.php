<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('Name_Section');
            $table->integer('Status');




            $table->integer('garde_id')->unsigned(); 
            $table->foreign('garde_id')->references('id')->on('Grades');

            $table->integer('Class_id')->unsigned(); 
            $table->foreign('Class_id')->references('id')->on('classroms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
