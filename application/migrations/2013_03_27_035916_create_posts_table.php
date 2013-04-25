<?php

class Create_Posts_Table {    

	public function up()
    {
		Schema::create('posts', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->string('url_title');
			$table->text('description')->nullable();
			$table->text('body');
			$table->integer('user_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('posts');

    }

}