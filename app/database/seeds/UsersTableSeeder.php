<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
			array(	
				'username' => 'joe',
				'email' => 'jortiz3@ggc.edu',
				'password' => Hash::make('joe')
			)
		);

		// Uncomment the below to run the seeder
		 DB::table('users')->insert($users);
	}

}
