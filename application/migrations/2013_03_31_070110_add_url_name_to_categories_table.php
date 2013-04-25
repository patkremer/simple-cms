<?php

class Add_Url_Name_To_Categories_Table {    

	public function up()
    {
		Schema::table('categories', function($table) {
			$table->string('url_name');
	});

    }    

	public function down()
    {
		Schema::table('categories', function($table) {
			$table->drop_column('url_name');
	});

    }

}