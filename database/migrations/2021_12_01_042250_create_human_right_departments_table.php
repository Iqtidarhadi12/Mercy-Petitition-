<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumanRightDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('human_right_departments', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('file_id')->unsigned()->index();
            $table->foreign('file_id')
            ->references('id')
            ->on('files')
            ->onDelete('cascade');
            $table->bigInteger('petition_id')->unsigned()->index();
            
            $table->foreign('petition_id')
            ->references('id')
            ->on('petitions')
            ->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index();
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
            $table->string('remarks');
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
        Schema::dropIfExists('human_right_departments');
    }
}
