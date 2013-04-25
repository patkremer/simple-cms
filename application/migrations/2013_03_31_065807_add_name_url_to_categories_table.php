<?php

class Add_Name_Url_To_Categories_Table {    

	public function up()
    {
		Schema::table('categories', function($table) {
			$table->string('name_url');
	});

    }    

	public function down()
    {
		Schema::table('categories', function($table) {
			$table->drop_column('name_url');
	});

    }

}