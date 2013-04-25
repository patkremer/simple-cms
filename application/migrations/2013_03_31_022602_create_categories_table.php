<?php

class Create_Categories_Table {    

	public function up()
    {
		Schema::create('categories', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description')->nullable();
	});

    }    

	public function down()
    {
		Schema::drop('categories');

    }

}