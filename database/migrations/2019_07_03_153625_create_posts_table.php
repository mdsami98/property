<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('type_id')->unsigned()->default(1);
            $table->string('title',128);
            $table->string('slug',128)->nullable();
            $table->decimal('price')->unsigned();
            $table->decimal('area');
            $table->integer('bedroom')->unsigned();
            $table->integer('bathroom')->unsigned();
            $table->integer('garage')->unsigned()->nullable();
            $table->text('description');
            $table->string('map')->nullable();
            $table->tinyInteger('publication_status')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
