<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100)->nullable();
			$table->string('height', 100)->nullable();
			$table->string('width', 100)->nullable();
			$table->string('length', 100)->nullable();
			$table->boolean('windows')->nullable();
			$table->boolean('ac')->nullable();
			$table->boolean('bathroom')->nullable();
			$table->boolean('kitchen')->nullable();
			$table->boolean('security_lights')->nullable();
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
