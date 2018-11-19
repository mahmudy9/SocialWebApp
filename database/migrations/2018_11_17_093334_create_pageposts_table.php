<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageposts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('page_id');
            $table->text('body');
            $table->string('image')->nullable();
            $table->json('comments');
            $table->json('likes');
            $table->json('shares');
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
        Schema::dropIfExists('pageposts');
    }
}
