<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CountryTest extends TestCase
{
    use DatabaseTransactions;

    protected $country;

    public function setUp()
    {
        parent::setUp();

	$this->country = factory(\App\Models\Country::class)->create();
    }

    public function testCountryHasProvinces()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->country->provinces);
    }

    public function testCountryHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->country->creator);
    }

    public function testCountryHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->country->owner);
    }
}
