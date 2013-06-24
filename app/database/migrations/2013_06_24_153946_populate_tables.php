<?php

use Illuminate\Database\Migrations\Migration;

class PopulateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create initial user
		$users = array(
			'id'         => 1,
			'first_name' => 'Wardrobe',
			'last_name'  => 'Admin',
			'email'      => 'admin@admin.com',
			'password'   => Hash::make('wardrobe'),
			'active'     => 1,
			'created_at' => DB::raw('NOW()'),
			'updated_at' => DB::raw('NOW()')
		);
		DB::table('users')->insert($users);

		// Create hello world post
		$posts = array(
			'id'           => 1,
			'title'        => 'Hello World',
			'slug'         => 'hello-world',
			'content'      => 'This is a sample [Wardrobe](http://wardrobecms.com/) post.',
			'image'        => '',
			'type'         => 'post',
			'publish_date' => DB::raw('NOW()'),
			'active'       => 1,
			'created_at'   => DB::raw('NOW()'),
			'updated_at'   => DB::raw('NOW()')
		);
		DB::table('posts')->insert($posts);
		$tags = array(
			'post_id' => 1,
			'tag'     => ''
		);
		DB::table('tags')->insert($tags);
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