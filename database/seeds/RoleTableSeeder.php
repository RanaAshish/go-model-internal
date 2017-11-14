<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Role::create( [ 'name' => 'admin' ] );
		Role::create( [ 'name' => 'user' ] );
		Role::create( [ 'name' => 'partner' ] );
		Role::create( [ 'name' => 'model' ] );
	}
}
