<?php

use Illuminate\Database\Seeder;

class TornCompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$player1 = \App\Models\Torn\Player::find(1);

	$company1 = factory(\App\Models\Torn\Company::class)->create([
	    'torn_id' => '60260',
	    'director_player_id' => $player1->id,
	    'type' => 'Ladies Strip Club',
	    'name' => '39 sausages',
	]);

    }
}
