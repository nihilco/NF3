<?php

use Illuminate\Database\Seeder;

class GamePlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(\App\Models\Game\Player::class)->create([
	    'user_id' => 1,
	    'name' => 'Uriah',
	]);

        //
	factory(\App\Models\Game\Player::class)->create([
	    'user_id' => 12,
	    'name' => 'David',
	]);

    }
}
