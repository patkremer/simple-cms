<?php

class Add_Category_Id_To_Posts_Table {    

	public function up()
    {
		Schema::table('posts', function($table) {
			$table->integer('category_id');
	});

    }    

	public function down()
    {
		Schema::table('posts', function($table) {
			$table->drop_column('category_id');
	});

    }

}