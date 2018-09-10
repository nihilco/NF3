<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddressTest extends TestCase
{
    use DatabaseTransactions;

    protected $address;

    public function setUp()
    {
        parent::setUp();

	$this->address = factory(\App\Models\Address::class)->create();
    }

    public function testAddressHasCity()
    {
	$this->assertInstanceOf(\App\Models\City::class, $this->address->city);
    }

    public function testAddressHasProvince()
    {
	$this->assertInstanceOf(\App\Models\Province::class, $this->address->province);
    }

    public function testAddressHasCountry()
    {
	$this->assertInstanceOf(\App\Models\Country::class, $this->address->country);
    }

    public function testAddressHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->address->creator);
    }

    public function testAddresHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->address->owner);
    }
}
