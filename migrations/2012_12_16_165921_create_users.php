<?php

class MyAuth_Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table) {
		    $table->increments('id');
		    $table->string('username');
		    $table->string('email');
		    $table->string('password');
		    $table->timestamps();   
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}