<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('posts', function ($table) {
    		
    		 $table->increments('id')->unsigned();
    		 $table->string('body',1000);
    		 $table->integer('user_id')->unsigned();
    		 $table->enum('privacy', array('public', 'private', 'custom'));
    		 
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
		//
	}

}
