<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$country = App\Models\Country::where('code', 'US')->first();
	$province = App\Mdoels\Province::where('code', 'KY')->first();

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Bath',
	    'name' => 'Bath County',
	    'description' => 'Bath County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Bourbon',
	    'name' => 'Bourbon County',
	    'description' => 'Bourbon County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Carrollton',
	    'name' => 'Carrollton County',
	    'description' => 'Carrollton County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Clark',
	    'name' => 'Clark County',
	    'description' => 'Clark County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Fayette',
	    'name' => 'Fayette County',
	    'description' => 'Fayette County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Fleming',
	    'name' => 'Fleming County',
	    'description' => 'Fleming County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Harrison',
	    'name' => 'Harrison County',
	    'description' => 'Harrison County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Jackson',
	    'name' => 'Jackson County',
	    'description' => 'Jackson County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Jessamine',
	    'name' => 'Jessamine County',
	    'description' => 'Jessamine County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Madison',
	    'name' => 'Madison County',
	    'description' => 'Madison County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Meade',
	    'name' => 'Meade County',
	    'description' => 'Meade County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Montgomery',
	    'name' => 'Montgomery County',
	    'description' => 'Montgomery County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Morgab',
	    'name' => 'Morgab County',
	    'description' => 'Morgab County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Morgan',
	    'name' => 'Morgan County',
	    'description' => 'Morgan County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Powell',
	    'name' => 'Powell County',
	    'description' => 'Powell County in the state of Kentucky, USA.',
	]);

        //
	factory(App\Models\County::class)->create([
	    'country_id' => $country->id,
	    'province_id' => $province->id,
	    'code' => 'Rowan',
	    'name' => 'Rowan County',
	    'description' => 'Rowan County in the state of Kentucky, USA.',
	]);
    }
}
