<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('fullname');
			$table->string('email')->unique();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
		});
		Schema::create('password_resets', function (Blueprint $table) {
			$table->string('email')->index();
			$table->string('token')->index();
			$table->timestamp('created_at');
		});
		Schema::create('features', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->string('status');
			$table->timestamps();
		});
		Schema::create('votes', function (Blueprint $table) {
			$table->increments('id');

			$table->integer('user')->unsigned();
			$table->foreign('user')
				  ->references('id')->on('users')
				  ->onDelete('cascade');

			$table->integer('voted_on')->unsigned();
			$table->foreign('voted_on')
				  ->references('id')->on('features')
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

	}
}
