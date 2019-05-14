<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->string('role');
            $table->string('productPage');
            $table->string('codePage');
            $table->boolean('isComplete')->default(0);
            $table->date('releaseDate');
            $table->unsignedInteger('cost');
            $table->boolean('isOpenSource')->default(0);
            $table->string('imgPath');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
