<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProvinceTest extends TestCase
{
    use DatabaseTransactions;

    protected $province;

    public function setUp()
    {
        parent::setUp();

	$this->province = factory(\App\Models\Province::class)->create();
    }

    public function testProvinceHasCountry()
    {
	$this->assertInstanceOf(\App\Models\Country::class, $this->province->country);
    }

    public function testProvinceHasCities()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->province->cities);
    }

    public function testProvinceHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->province->creator);
    }

    public function testProvinceHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->province->owner);
    }
}
