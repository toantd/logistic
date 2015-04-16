<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'video', function(Blueprint $table){
		    $table->engine = 'InnoDB';
			$table->increments('id');
			$table->unsignedInteger('language_id');
			$table->foreign('language_id')->references('id')->on('language');
			$table->integer('position')->nullable();
			$table->string('filename', 255)->nullable();
			$table->string('name', 255)->nullable();
			$table->text('description')->nullable();
			$table->string('youtube', 255)->nullable();
			$table->unsignedInteger('video_album_id')->nullable();
			$table->foreign('video_album_id')->references('id')->on('video_album')->onDelete('set null');
			$table->boolean('album_cover')->nullable();
			$table->unsignedInteger('user_id')->nullable();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
			$table->unsignedInteger('user_id_edited')->nullable();
			$table->foreign('user_id_edited')->references('id')->on('users')->onDelete('set null');
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
		Schema::drop('video');
	}

}
