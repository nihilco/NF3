<?php

use Illuminate\Database\Seeder;

class USCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$this->call([
	    USALCitiesTableSeeder::class, // AL
	    USARCitiesTableSeeder::class, // AR
	    USCACitiesTableSeeder::class, // CA
	    USCOCitiesTableSeeder::class, // CO
	    USCTCitiesTableSeeder::class, // CT
	    USFLCitiesTableSeeder::class, // FL
	    USGACitiesTableSeeder::class, // GA
	    USILCitiesTableSeeder::class, // IL
	    USINCitiesTableSeeder::class, // IN
	    USKYCitiesTableSeeder::class, // KY
	    USLACitiesTableSeeder::class, // LA
	    USMACitiesTableSeeder::class, // MA
	    USMDCitiesTableSeeder::class, // MD
	    USMECitiesTableSeeder::class, // ME
	    USMICitiesTableSeeder::class, // MI
	    USMOCitiesTableSeeder::class, // MO
	    USMSCitiesTableSeeder::class, // MS
	    USNCCitiesTableSeeder::class, // NC
	    USNJCitiesTableSeeder::class, // NJ
	    USNYCitiesTableSeeder::class, // NY
	    USOHCitiesTableSeeder::class, // OH
	    USOKCitiesTableSeeder::class, // OK
	    USPACitiesTableSeeder::class, // PA
	    USRICitiesTableSeeder::class, // RI
	    USSCCitiesTableSeeder::class, // SC
	    USTNCitiesTableSeeder::class, // TN
	    USTXCitiesTableSeeder::class, // TX
	    USVACitiesTableSeeder::class, // VA
	    USVTCitiesTableSeeder::class, // VT
	    USWVCitiesTableSeeder::class, // WV
	]);
    }
}
