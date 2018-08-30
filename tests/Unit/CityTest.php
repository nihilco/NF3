<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CityTest extends TestCase
{
    use DatabaseTransactions;

    protected $city;

    public function setUp()
    {
        parent::setUp();

	$this->city = factory(\App\Models\City::class)->create();
    }
    
    public function testCityHasProvince()
    {
	$this->assertInstanceOf(\App\Models\Province::class, $this->city->province);
    }

    public function testCityHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->city->creator);
    }

    public function testCityHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->city->owner);
    }
}