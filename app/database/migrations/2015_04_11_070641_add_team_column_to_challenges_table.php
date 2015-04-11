<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTeamColumnToChallengesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('challenges', function(Blueprint $table)
		{
			$table->string('team')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('challenges', function(Blueprint $table)
		{
			$table->dropColumn('team');
		});
	}

}
