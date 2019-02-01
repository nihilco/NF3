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

    \DB::table('torn_companies')->insert([
      [
        "torn_id" => 60260,
        "director_player_id" => 1,
        "type" => "Ladies Strip Club",
        "name" => "39 sausages",
        "deleted_at" => null,
        "created_at" => "2019-01-10 16:53:18",
        "updated_at" => "2019-01-10 16:53:18",
        "creator_id" => 1,
        "owner_id" => 1,
      ],
    ]);

  }
}