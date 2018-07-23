<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	$countries = App\Models\Country::all();

        //
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AL',
	    'name' => 'ALABAMA',
	]);
	
	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AK',
	    'name' => 'ALASKA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AS',
	    'name' => 'AMERICAN SAMOA',
	]);
	
	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AZ',
	    'name' => 'ARIZONA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AR',
	    'name' => 'ARKANSAS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'CA',
	    'name' => 'CALIFORNIA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'CO',
	    'name' => 'COLORADO',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'CT',
	    'name' => 'CONNECTICUT',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'DE',
	    'name' => 'DELAWARE',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'DC',
	    'name' => 'DISTRICT OF COLUMBIA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'FM',
	    'name' => 'FEDERATED STATES OF MICRONESIA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'FL',
	    'name' => 'FLORIDA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'GA',
	    'name' => 'GEORGIA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'GU',
	    'name' => 'GUAM GU',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'HI',
	    'name' => 'HAWAII',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'ID',
	    'name' => 'IDAHO',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'IL',
	    'name' => 'ILLINOIS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'IN',
	    'name' => 'INDIANA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'IA',
	    'name' => 'IOWA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'KS',
	    'name' => 'KANSAS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'KY',
	    'name' => 'KENTUCKY',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'LA',
	    'name' => 'LOUISIANA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'ME',
	    'name' => 'MAINE',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MH',
	    'name' => 'MARSHALL ISLANDS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MD',
	    'name' => 'MARYLAND',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MA',
	    'name' => 'MASSACHUSETTS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MI',
	    'name' => 'MICHIGAN',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MN',
	    'name' => 'MINNESOTA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MS',
	    'name' => 'MISSISSIPPI',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MO',
	    'name' => 'MISSOURI',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MT',
	    'name' => 'MONTANA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'NE',
	    'name' => 'NEBRASKA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'NV',
	    'name' => 'NEVADA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'NH',
	    'name' => 'NEW HAMPSHIRE',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'NJ',
	    'name' => 'NEW JERSEY',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'NM',
	    'name' => 'NEW MEXICO',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'NY',
	    'name' => 'NEW YORK',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'NC',
	    'name' => 'NORTH CAROLINA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'ND',
	    'name' => 'NORTH DAKOTA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'MP',
	    'name' => 'NORTHERN MARIANA ISLANDS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'OH',
	    'name' => 'OHIO',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'OK',
	    'name' => 'OKLAHOMA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'OR',
	    'name' => 'OREGON',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'PW',
	    'name' => 'PALAU',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'PA',
	    'name' => 'PENNSYLVANIA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'PR',
	    'name' => 'PUERTO RICO',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'RI',
	    'name' => 'RHODE ISLAND',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'SC',
	    'name' => 'SOUTH CAROLINA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'SD',
	    'name' => 'SOUTH DAKOTA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'TN',
	    'name' => 'TENNESSEE',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'TX',
	    'name' => 'TEXAS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'UT',
	    'name' => 'UTAH',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'VT',
	    'name' => 'VERMONT',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'VI',
	    'name' => 'VIRGIN ISLANDS',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'VA',
	    'name' => 'VIRGINIA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'WA',
	    'name' => 'WASHINGTON',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'WV',
	    'name' => 'WEST VIRGINIA',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'WI',
	    'name' => 'WISCONSIN',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'WY',
	    'name' => 'WYOMING',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AE',
	    'name' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AA',
	    'name' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $countries->where('code', 'US')->first()->id,
	    'code' => 'AP',
	    'name' => 'ARMED FORCES PACIFIC',
	]);

    }
}
