<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogInteriorMinistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_interior_ministries', function (Blueprint $table) {
            $table->id();
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
            $table->string('created');
            $table->string('department');
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
        Schema::dropIfExists('log_interior_ministries');
    }
}
