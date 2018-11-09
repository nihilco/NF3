<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$cities = \App\Models\City::all();
	$provinces = \App\Models\Province::all();
	$countries = \App\Models\Country::all();

        //
	factory(\App\Models\Address::class)->create([
	    'address1' => '141 E. College Ave.',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Decatur')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30030',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'P. O. Box 908',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Normal')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35762',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 870132',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Tuscaloosa')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35487',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1720 2nd Ave South',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Birmingham')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35294',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '301 Sparkman Drive ',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Huntsville')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35899',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '301 Sparkman Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Huntsville')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35899',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '22 Ellis Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Jackson')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38301',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '4400 Massachusetts Avenue NW',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Washington')->first()->id,
	    'province_id' => $provinces->where('code', 'DC')->first()->id,
	    'postal_code' => '20016',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '450 South Easton Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Glenside')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '19038',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '500 Salisbury St.',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Worcester')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '01609',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'The Quad Center',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Auburn')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '36849',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 244023',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Montgomery')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '36124',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '601 College Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Clarksville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37044',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '23 Campus Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lewiston')->first()->id,
	    'province_id' => $provinces->where('code', 'ME')->first()->id,
	    'postal_code' => '04240',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'One Bear Place #97056',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Waco')->first()->id,
	    'province_id' => $provinces->where('code', 'TX')->first()->id,
	    'postal_code' => '76798',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1900 Belmont Blvd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Nashville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37212',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '101 CHESTNUT STREET',
	    'address2' => 'Haaga House CPO 2220',
	    'city_id' => $cities->where('name', 'Berea')->first()->id,
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '40404',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2277 Martha Berry Hwy NW',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Mount Berry')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30149',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Office of Recruitment',
	    'address2' => '325 Cherry Avenue',
	    'city_id' => $cities->where('name', 'McKenzie')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38201',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '900 Arkadelphia Rd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Birmingham')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35254',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Office of Undergraduate Admissions',
	    'address2' => '233 Bay State Road',
	    'city_id' => $cities->where('name', 'Boston')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '02215',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '5000 College Station',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Brunswick')->first()->id,
	    'province_id' => $provinces->where('code', 'ME')->first()->id,
	    'postal_code' => '04011',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '415 South Street',
	    'address2' => 'MS MS3',
	    'city_id' => $cities->where('name', 'Waltham')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '02453',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '500 Washington St SE',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Gainesville')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30501',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '721 Bryan Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Dayton')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37321',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '100 South College Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Northfield')->first()->id,
	    'province_id' => $provinces->where('code', 'MN')->first()->id,
	    'postal_code' => '55057',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1646 Russell Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Jefferson City')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37760',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '11318 Bellflower Road',
	    'address2' => 'Wolstein Hall',
	    'city_id' => $cities->where('name', 'Cleveland')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '44106',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2300 W. Innes Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Salisbury')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '28144',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '65 George Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Charleston')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29414',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '5600 Brainerd Road',
	    'address2' => 'Ste E-3',
	    'city_id' => $cities->where('name', 'Chattanooga')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37411',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '4501 Amnicola Highway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Chattanooga')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37406',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1101 E 58th Street',
	    'address2' => 'Rosenwald 105',
	    'city_id' => $cities->where('name', 'Chicago')->first()->id,
	    'province_id' => $provinces->where('code', 'IL')->first()->id,
	    'postal_code' => '60637',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '650 East Parkway South',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Memphis')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38104',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2000 N Parkway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Memphis')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38104',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '950 Main Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Worcester')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '01610',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '105 Sikes Hall',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Clemson')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29634',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 261954',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Conway')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29528',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Office of Admissions',
	    'address2' => 'One College Dr.',
	    'city_id' => $cities->where('name', 'Brunswick')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '31520',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '13 Oak Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Hamilton')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '13346',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '14 East Cache La Poudre St.',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Colorado Springs')->first()->id,
	    'province_id' => $provinces->where('code', 'CO')->first()->id,
	    'postal_code' => '80903',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '600 S Michigan Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Chicago')->first()->id,
	    'province_id' => $provinces->where('code', 'IL')->first()->id,
	    'postal_code' => '60605',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1301 Columbia College Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Columbia')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29203',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '580 E. Main St.',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Spartanburg')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29302',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '14049 Scenic Highway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lookout Mountain')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30750',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 Cumberland Square ',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lebanon')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37087',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3000 Mountain Creek Parkway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Dallas')->first()->id,
	    'province_id' => $provinces->where('code', 'TX')->first()->id,
	    'postal_code' => '75211',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '650 College Dr',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Dalton')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30720',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '300 College Park',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Dayton')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '45469',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Box 7156',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Davidson')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '28035',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Admissions Office',
	    'address2' => 'Box 740',
	    'city_id' => $cities->where('name', 'Granivlle')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '43023',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '204 E. Seminary St',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Greencastle')->first()->id,
	    'province_id' => $provinces->where('code', 'IN')->first()->id,
	    'postal_code' => '46135',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 1773',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Carlisle')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '17013',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'College Admissions',
	    'address2' => '36 M',
	    'city_id' => $cities->where('name', 'Madison')->first()->id,
	    'province_id' => $provinces->where('code', 'NJ')->first()->id,
	    'postal_code' => '07940',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3141 Chestnut St',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Philadelphia')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '19104',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '801 National Rd W',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Richmond')->first()->id,
	    'province_id' => $provinces->where('code', 'IN')->first()->id,
	    'postal_code' => '47374',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 70731',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Johnson City')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37614',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Eckerd College Admissions',
	    'address2' => '4200 54th Ave South',
	    'city_id' => $cities->where('name', 'Saint Petersburg')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '33711',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Le Chalet-à-Gobet',
	    'address2' => 'Route de Cojonnex 18',
	    'city_id' => $cities->where('name', 'Lausanne')->first()->id,
	    'province_id' => $provinces->where('code', 'Vaud')->first()->id,
	    'postal_code' => '1000',
	    'country_id' => $countries->where('code', 'CH')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '501 Corporate Centre Drive – Suite 320',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Franklin')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37067',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '501 Corporate Centre Drive – Suite 320',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Franklin')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37067',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '100 Campus Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Elon')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '27244',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '600 S Clyde Morris Blvd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Daytona Beach')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '32114',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	     'address1' => 'Office of Admission',
	     'address2' => 'PO Box 947',
	     'city_id' => $cities->where('name', 'Emory')->first()->id,
	     'province_id' => $provinces->where('code', 'VA')->first()->id,
	     'postal_code' => '24327',
	     'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '122 Few Circle',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Oxford')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30054',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1000 17th Ave North',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Nashville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37208',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '111 Hollingsworth Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lakeland')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '33801',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'P.O. Box 3003',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lancaster')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '17604',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '158 East Main Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Henderson')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38340',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3300 Poinsett Highway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Greenville')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29613',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => ' 4400 University Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Fairfax')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '22030',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2121 I Street',
	    'address2' => 'Suite 201',
	    'city_id' => $cities->where('name', 'Washington')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '20052',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Office of Admissions',
	    'address2' => 'Campus Box 23',
	    'city_id' => $cities->where('name', 'Milledgeville')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '31061',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'North Avenue NW',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Atlanta')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30332',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1332 Southern Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Statesboro')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30458',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Terrell Hall',
	    'address2' => '210 S. jackson Street',
	    'city_id' => $cities->where('name', 'Athens')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30602',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1021 Dulaney Valley Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Baltimore')->first()->id,
	    'province_id' => $provinces->where('code', 'MD')->first()->id,
	    'postal_code' => '21204',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '5800 West Friendly Ave.',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Greensboro')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '27410',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '198 College College',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Clinton')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '13323',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1600 Washington Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Conway')->first()->id,
	    'province_id' => $provinces->where('code', 'AR')->first()->id,
	    'postal_code' => '72032',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 University Parkway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'High Point')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '27268',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '33 E. College Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Hillsdale')->first()->id,
	    'province_id' => $provinces->where('code', 'MI')->first()->id,
	    'postal_code' => '49242',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '225 Hiwassee College Dr',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Madisonville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37354',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '7916 Williamson Rd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Roanoke')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '24019',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 College Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Worcester')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '01610',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Cardenal Zuñiga 12',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Segovia')->first()->id,
	    'province_id' => $provinces->where('code', 'Segovia')->first()->id,
	    'postal_code' => '40003',
	    'country_id' => $countries->where('code', 'ES')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1312 Park St',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Bloomington')->first()->id,
	    'province_id' => $provinces->where('code', 'IL')->first()->id,
	    'postal_code' => '61701',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '700 Pelham Road North',
	    'address2' => 'Office of Admissions',
	    'city_id' => $cities->where('name', 'Jacksonville')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '36265',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2800 University Blvd. N',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Jacksonville')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '32211',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Campus Ring  1',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Bremen')->first()->id,
	    'province_id' => $provinces->where('code', 'LS')->first()->id,
	    'postal_code' => '28759',
	    'country_id' => $countries->where('code', 'DE')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Campus Ring 1',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Bremen')->first()->id,
	    'province_id' => $provinces->where('code', 'CA')->first()->id,
	    'postal_code' => '28759',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '502 E Lamar Alexander Pkwy',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Maryville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37804',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3400 North Charles Street',
	    'address2' => 'Mason Hall',
	    'city_id' => $cities->where('name', 'Baltimore')->first()->id,
	    'province_id' => $provinces->where('code', 'MD')->first()->id,
	    'postal_code' => '21218',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '8 Abbott Park Place',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Providence')->first()->id,
	    'province_id' => $provinces->where('code', 'RI')->first()->id,
	    'postal_code' => '02903',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1700 Moore St',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Huntingdon')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '16652',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Schlossplatz 19',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Karlsruhe')->first()->id,
	    'province_id' => $provinces->where('code', 'BW')->first()->id,
	    'postal_code' => '76131',
	    'country_id' => $countries->where('code', 'DE')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2600 N. Military Trail',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'West Palm Beach')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '33409',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3391 Town Point Drive, Suite 1000',
	    'address2' => 'MD 9111',
	    'city_id' => $cities->where('name', 'Kennesaw')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30144',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '12 Funkhouser Building',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lexington')->first()->id,
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '40506',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Ransom Hall',
	    'address2' => '106 College Park St',
	    'city_id' => $cities->where('name', 'Gambier')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '43022',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1350 King College Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Bristol')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37620',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '730 High Street',
	    'address2' => 'Markle Hall',
	    'city_id' => $cities->where('name', 'Easton')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '18042',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '555 N Sheridan Rd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lake Forest')->first()->id,
	    'province_id' => $provinces->where('code', 'IL')->first()->id,
	    'postal_code' => '60645',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 3450',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Cleveland')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37320',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '27 Memorial Drive West',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Bethlehem')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '18015',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Rue du Lac 118 - 4th Floor',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Clarens')->first()->id,
	    'province_id' => $provinces->where('code', 'Vaud')->first()->id,
	    'postal_code' => '1815',
	    'country_id' => $countries->where('code', 'CH')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '6965 Cumberland Gap Parkway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Harrogate')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37752',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'One University Park Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Nashville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37204',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '720 Northern Blvd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Brookville')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '11458',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1146 Pleasant Hall',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Baton Rouge')->first()->id,
	    'province_id' => $provinces->where('code', 'LA')->first()->id,
	    'postal_code' => '70803',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '6363 Saint Charles Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'New Orleans')->first()->id,
	    'province_id' => $provinces->where('code', 'LA')->first()->id,
	    'postal_code' => '70118',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3601 North Military Trail',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Boca Raton')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '33431',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3399 North Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Poughkeepsie')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '12601',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'One John Marshall Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Huntington')->first()->id,
	    'province_id' => $provinces->where('code', 'WV')->first()->id,
	    'postal_code' => '25701',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1301 College Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Fredericksburg')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '22401',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '502 E Lamar Alexander Pkwy',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Maryville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37804',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2 College Hill',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Westminster')->first()->id,
	    'province_id' => $provinces->where('code', 'MD')->first()->id,
	    'postal_code' => '21157',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1930 Poplar Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Memphis')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38104',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '101 Wilder Tower',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Memphis')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38152',
	    'country_id' => $countries->where('code', 'US')->first()->id,
]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Office of Undergraduate Admissioins',
	    'address2' => '1501 Mercer University Drive',
	    'city_id' => $cities->where('name', 'Macon')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '31207',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '301 South Campus Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Oxford')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '45056',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1301 E Main Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Murfreesboro')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37130',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1701 N State Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Jackson')->first()->id,
	    'province_id' => $provinces->where('code', 'MS')->first()->id,
	    'postal_code' => '39210',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'P O Box 6334',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Miss State')->first()->id,
	    'province_id' => $provinces->where('code', 'MS')->first()->id,
	    'postal_code' => '39762',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 9760',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Starkville')->first()->id,
	    'province_id' => $provinces->where('code', 'MS')->first()->id,
	    'postal_code' => '39762',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Office of Admissions',
	    'address2' => '145 Martindale Center',
	    'city_id' => $cities->where('name', 'University')->first()->id,
	    'province_id' => $provinces->where('code', 'MS')->first()->id,
	    'postal_code' => '38677',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '230 Jesse Hall',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Columbia')->first()->id,
	    'province_id' => $provinces->where('code', 'MO')->first()->id,
	    'postal_code' => '65211',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Station 6030',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Montevallo')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35115',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '310 Gaither Circle',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Montreat')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '28757',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '170 South Ocoee St',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Cleveland')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37311',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Undergraduate Admissions',
	    'address2' => '383 Lafayette Street',
	    'city_id' => $cities->where('name', 'New York')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '10003',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 Harrison Plaza',
	    'address2' => 'UNA Box 5021',
	    'city_id' => $cities->where('name', 'Florence')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35630',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2582 Riceville Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Asheville')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '28805',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '82 College Circle',
	    'address2' => 'Chestatee Bld., 3rd floor',
	     'city_id' => $cities->where('name', 'Dalonega')->first()->id,
	     'province_id' => $provinces->where('code', 'GA')->first()->id,
	     'postal_code' => '30597',
	     'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '360 Huntington Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Boston')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '02115',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3301 College Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Fort Lauderdale')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '33314',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1600 Campus Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Los Angeles')->first()->id,
	    'province_id' => $provinces->where('code', 'CA')->first()->id,
	    'postal_code' => '90041',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '4484 Peachtree Rd NE',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Atlanta')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30319',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1004 Rollins Hall',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Norfolk')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '23529',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1021 Central Avenue',
	    'address2' => 'P.O. Box 10',
	    'city_id' => $cities->where('name', 'Demorest')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30535',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '503 South Broad Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Clinton')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29325',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 Cunningham Square',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Providence')->first()->id,
	    'province_id' => $provinces->where('code', 'RI')->first()->id,
	    'postal_code' => '02918',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '465 Stadium Mall Dr',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'West Lafayette')->first()->id,
	    'province_id' => $provinces->where('code', 'IN')->first()->id,
	    'postal_code' => '47907',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1900 Selwyn Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Charlotte')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '28274',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'P.O. Box 6903',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Radford')->first()->id,
	    'province_id' => $provinces->where('code', 'VT')->first()->id,
	    'postal_code' => '24142',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1815 Union Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Chattanooga')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37404',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '7300 Reinhardt Circle',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Waleska')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30183',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2000 N Parkway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Memphis')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38112',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '28 Westhampton Way',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Richmond')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '23173',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	   'address1' => '221 College Lane',
	   'address2' => NULL,
	   'city_id' => $cities->where('name', 'Salem')->first()->id,
	   'province_id' => $provinces->where('code', 'VA')->first()->id,
	   'postal_code' => '24153',
	   'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '60 Lomb Memorial Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Rochester')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '14623',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '150 Rust Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Holly Springs')->first()->id,
	    'province_id' => $provinces->where('code', 'MS')->first()->id,
	    'postal_code' => '38635',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'One Grand Blvd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'St. Louis')->first()->id,
	    'province_id' => $provinces->where('code', 'MO')->first()->id,
	    'postal_code' => '63103',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '601 South Church Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Winston-Salem')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '27101',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '800 Lakeshore Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Birmingham')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '35229',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2130 Fulton Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'San Francisco')->first()->id,
	    'province_id' => $provinces->where('code', 'CA')->first()->id,
	    'postal_code' => '94117',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 2072',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Savannah')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '36102',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '735 University Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Sewanee')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37383',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '315 Shorter Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Rome')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30165',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '300 The Fenway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Boston')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '02115',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '815 N Broadway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Saratoga Springs')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '12866',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2500 Meisler Hall',
	    'address2' => '390 Alumni Circle',
	    'city_id' => $cities->where('name', 'Mobile')->first()->id,
	    'province_id' => $provinces->where('code', 'AL')->first()->id,
	    'postal_code' => '36688',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '902 Sumter Street Access/Lieber College',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Columbia')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29208',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '4881 Taylor Circle',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Collegedale')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37315',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '6425 Boaz Lane',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Dallas')->first()->id,
	    'province_id' => $provinces->where('code', 'TX')->first()->id,
	    'postal_code' => '75205',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '118 College Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Hattiesburg')->first()->id,
	    'province_id' => $provinces->where('code', 'MS')->first()->id,
	    'postal_code' => '39406',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1001 East University Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Georgetown')->first()->id,
	    'province_id' => $provinces->where('code', 'TX')->first()->id,
	    'postal_code' => '78626',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	   'address1' => '23 Romoda Drive',
	   'address2' => NULL,
	   'city_id' => $cities->where('name', 'Canton')->first()->id,
	   'province_id' => $provinces->where('code', 'NY')->first()->id,
	   'postal_code' => '13617',
	   'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 Castle Point on the Hudson',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Hoboken')->first()->id,
	    'province_id' => $provinces->where('code', 'NJ')->first()->id,
	    'postal_code' => '07030',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '21 Graham Avenue',
	    'address2' => 'PO Box 2000',
	    'city_id' => $cities->where('name', 'Cortland')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '13045',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '134 Chapel Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Sweet Briar')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '24595',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '900 South Crouse Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Syracuse')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '13244',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '401 W. Kennedy Blvd',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Tampa')->first()->id,
	    'province_id' => $provinces->where('code', 'FL')->first()->id,
	    'postal_code' => '33606',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '404 James Robertson Parkway',
	    'address2' => 'Suite 1510 Parkway Towers',
	    'city_id' => $cities->where('name', 'Nashville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37243',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 William L. Jones Dr.',
	    'address2' => 'Box 5006',
	    'city_id' => $cities->where('name', 'Cookeville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38505',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '204 East College Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Athens')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37303',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '320 Student Services Building',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Knoxville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37996',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '200 Administration Building',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Martin')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38261',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '615 McCallie Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Chattanooga')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37403',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'University of Tennessee',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Knoxville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37996',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1265 TAMU',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'College Station')->first()->id,
	    'province_id' => $provinces->where('code', 'TX')->first()->id,
	    'postal_code' => '77843',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'TCU Box 297013',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Fort Worth')->first()->id,
	    'province_id' => $provinces->where('code', 'TX')->first()->id,
	    'postal_code' => '76129',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '100 Centerview Dr.',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Nashville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37214',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '300 North Broadway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lexington')->first()->id,
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '40508',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '300 Summit Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Hartford')->first()->id,
	    'province_id' => $provinces->where('code', 'CT')->first()->id,
	    'postal_code' => '06106',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'One Trinity Place',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'San Antonio')->first()->id,
	    'province_id' => $provinces->where('code', 'TX')->first()->id,
	    'postal_code' => '78212',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Bendetson Hall',
	    'address2' => 'Tufts University',
	    'city_id' => $cities->where('name', 'Medford')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '02155',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '6823 St. Charles Ave.',
	    'address2' => '210 Gibson Hall',
	    'city_id' => $cities->where('name', 'New Orleans')->first()->id,
	    'province_id' => $provinces->where('code', 'LA')->first()->id,
	    'postal_code' => '70118',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '800 South Tucker Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Tulsa')->first()->id,
	    'province_id' => $provinces->where('code', 'OK')->first()->id,
	    'postal_code' => '74104',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '60 Shiloh Road',
	    'address2' => 'Box 5051',
	    'city_id' => $cities->where('name', 'Greeneville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37743',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '807 Union St.',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Schnectady')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '12308',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '22 Ellis Drive',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Jackson')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38301',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '31 Mohegan Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'New London')->first()->id,
	    'province_id' => $provinces->where('code', 'CT')->first()->id,
	    'postal_code' => '06320',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '606 Thayer Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'West Point')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '10966',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '121 Blake Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Annapolis')->first()->id,
	    'province_id' => $provinces->where('code', 'MD')->first()->id,
	    'postal_code' => '21402',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Castletroy',
	    'address2' => 'Limerick',
	    'city_id' => $cities->where('name', 'Limerick')->first()->id,
	    'province_id' => $provinces->where('code', 'Munster')->first()->id,
	    'postal_code' => 'V94 T9PX',
	    'country_id' => $countries->where('code', 'IE')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '200 Administration Building',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Martin')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '38238',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1500 N. Patterson St',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Valdosta')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '31698',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2305 West End Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Nashville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37203',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '800 Lancaster Ave',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Villanova')->first()->id,
	    'province_id' => $provinces->where('code', 'PA')->first()->id,
	    'postal_code' => '19085',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '821 W Franklin St',
	    'address2' => 'PO Box 842526',
	    'city_id' => $cities->where('name', 'Richmond')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '23284',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '925 Prices Fork Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Blacksburg')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '24061',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 7305',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Winston-Salem')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '27109',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'PO Box 9000',
	    'address2' => 'CPO 6375',
	    'city_id' => $cities->where('name', 'Asheville')->first()->id,
	    'province_id' => $provinces->where('code', 'NC')->first()->id,
	    'postal_code' => '28815',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '204 W. Washington Street',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Lexington')->first()->id,
	    'province_id' => $provinces->where('code', 'VA')->first()->id,
	    'postal_code' => '24450',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 Brookings Drive',
	    'address2' => 'Campus Box 1089',
	    'city_id' => $cities->where('name', 'St. Louis')->first()->id,
	    'province_id' => $provinces->where('code', 'MO')->first()->id,
	    'postal_code' => '63130',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '2298 Rosa L. Parks Boulevard',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Nashville')->first()->id,
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37228',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '4760 Forsyth Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Macon')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '31210',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1906 College Heights BLVD',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Bowling Green')->first()->id,
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '42101',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => 'Ward Street at North Wittenberg Avenue',
	    'address2' => 'P. O. Box 720',
	    'city_id' => $cities->where('name', 'Springfield')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '45501',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '429 N Church Street',
	    'address2' => 'CPO O',
	    'city_id' => $cities->where('name', 'Spartanburg')->first()->id,
	    'province_id' => $provinces->where('code', 'SC')->first()->id,
	    'postal_code' => '29303',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1189 Beall Avenue',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Wooster')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '44691',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '100 Institute Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Worcester')->first()->id,
	    'province_id' => $provinces->where('code', 'MA')->first()->id,
	    'postal_code' => '01609',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1000 Woodbury Road',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Woodbury')->first()->id,
	    'province_id' => $provinces->where('code', 'NY')->first()->id,
	    'postal_code' => '11797',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '3800 Victory Parkway',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Cincinnati')->first()->id,
	    'province_id' => $provinces->where('code', 'OH')->first()->id,
	    'postal_code' => '45207',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	factory(\App\Models\Address::class)->create([
	    'address1' => '1 College St',
	    'address2' => NULL,
	    'city_id' => $cities->where('name', 'Young Harris')->first()->id,
	    'province_id' => $provinces->where('code', 'GA')->first()->id,
	    'postal_code' => '30582',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);
    }
}
