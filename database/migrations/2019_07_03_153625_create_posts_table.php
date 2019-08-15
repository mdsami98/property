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
            $table->string('region',128)->nullable();
            $table->string('region_area',128)->nullable();
            $table->tinyInteger('post_type')->default(0);
            $table->string('slug',128)->nullable();
            $table->decimal('price')->unsigned();
            $table->decimal('area');
            $table->text('phn_number');
            $table->integer('bedroom')->unsigned();
            $table->integer('bathroom')->unsigned();
            $table->integer('garage')->unsigned()->nullable();
            $table->text('description');
            $table->text('address');
            $table->text('floor');
            $table->string('map')->nullable();
            $table->string('image');
            $table->tinyInteger('publication_status')->default(0);
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
