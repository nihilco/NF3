<?php

use Illuminate\Database\Seeder;

class USProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	$country = App\Models\Country::where('code', 'US')->first();

        //
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AL',
	    'name' => 'Alabama',
	]);
	
	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AK',
	    'name' => 'Alaska',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AS',
	    'name' => 'American Samoa',
	]);
	
	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AZ',
	    'name' => 'Arizona',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AR',
	    'name' => 'Arkansas',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'CA',
	    'name' => 'California',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'CO',
	    'name' => 'Colorado',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'CT',
	    'name' => 'Connecticut',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'DE',
	    'name' => 'Delaware',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'DC',
	    'name' => 'District of Columbia',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'FM',
	    'name' => 'Federated States of Micronesia',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'FL',
	    'name' => 'Florida',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'GA',
	    'name' => 'Georgia',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'GU',
	    'name' => 'Guam GU',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'HI',
	    'name' => 'Hawaii',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'ID',
	    'name' => 'Idaho',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'IL',
	    'name' => 'Illinois',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'IN',
	    'name' => 'Indiana',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'IA',
	    'name' => 'Iowa',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'KS',
	    'name' => 'Kansas',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'KY',
	    'name' => 'Kentucky',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'LA',
	    'name' => 'Louisiana',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'ME',
	    'name' => 'Maine',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MH',
	    'name' => 'Marshall Islands',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MD',
	    'name' => 'Maryland',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MA',
	    'name' => 'Massachusetts',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MI',
	    'name' => 'Michigan',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MN',
	    'name' => 'Minnesota',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MS',
	    'name' => 'Mississippi',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MO',
	    'name' => 'Missouri',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MT',
	    'name' => 'Montana',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'NE',
	    'name' => 'Nebraska',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'NV',
	    'name' => 'Nevada',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'NH',
	    'name' => 'New Hampshire',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'NJ',
	    'name' => 'New Jersey',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'NM',
	    'name' => 'New Mexico',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'NY',
	    'name' => 'New York',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'NC',
	    'name' => 'North Carolina',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'ND',
	    'name' => 'North Dakota',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'MP',
	    'name' => 'Northern Mariana Islands',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'OH',
	    'name' => 'Ohio',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'OK',
	    'name' => 'Oklahoma',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'OR',
	    'name' => 'Oregon',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'PW',
	    'name' => 'Palau',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'PA',
	    'name' => 'Pennsylvania',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'PR',
	    'name' => 'Puerto Rico',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'RI',
	    'name' => 'Rhode Island',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'SC',
	    'name' => 'South Carolina',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'SD',
	    'name' => 'South Dakota',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'TN',
	    'name' => 'Tennessee',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'TX',
	    'name' => 'Texas',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'UT',
	    'name' => 'Utah',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'VT',
	    'name' => 'Vermont',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'VI',
	    'name' => 'Virgin Islands',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'VA',
	    'name' => 'Virginia',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'WA',
	    'name' => 'Washington',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'WV',
	    'name' => 'West Virginia',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'WI',
	    'name' => 'Wisconsin',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'WY',
	    'name' => 'Wyoming',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AE',
	    'name' => 'Armed Forces Africa \ Canada \ Europe \ Middle East',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AA',
	    'name' => 'Armed Forces America (Except Canada)',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'AP',
	    'name' => 'Armed Forces Pacific',
	]);
    }
}
