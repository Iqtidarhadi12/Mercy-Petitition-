<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->bigInteger('petition_id')->unsigned()->index();
            
            $table->foreign('petition_id')
            ->references('id')
            ->on('petitions')
            ->onDelete('cascade');
           
            $table->bigInteger('homedepartment_id')->unsigned()->index();
          
            $table->foreign('homedepartment_id')
            ->references('id')
            ->on('homedepartments')
            ->onDelete('cascade');
            $table->bigInteger('interiorministry_id')->unsigned()->index();
            
            $table->foreign('interiorministry_id')
            ->references('id')
            ->on('interiorministries')
            ->onDelete('cascade');
            $table->bigInteger('humanrightdepartment_id')->unsigned()->index();
           
            $table->foreign('humanrightdepartment_id')
            ->references('id')
            ->on('humanrightdepartments')
            ->onDelete('cascade');
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
        Schema::dropIfExists('files');
    }
}
