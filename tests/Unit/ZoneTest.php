<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ZoneTest extends TestCase
{
    use DatabaseTransactions;

    protected $zone;

    public function setUp()
    {
        parent::setUp();

	$this->zone = factory(\App\Models\Zone::class)->create();
    }

    public function testZoneHasDomain()
    {
	$this->assertInstanceOf(\App\Models\Domain::class, $this->zone->domain);
    }

    public function testZoneHasRecords()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->zone->records);
    }

    public function testZoneHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->zone->creator);
    }

    public function testZoneHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->zone->owner);
    }
}
