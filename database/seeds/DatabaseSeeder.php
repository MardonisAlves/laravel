<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		

		Model::unguard();

		$user = new App\User();
		$user->name="MardonisAlves";
		$user->email = "mardonisgp@gmail.com";
		$user->password = Hash::make('#qwe123qwe@');
		$user->remember_token=true;
		$user->master=1;
		$user->save();
	
		 //$this->call('UserTableSeeder');
	}

}
