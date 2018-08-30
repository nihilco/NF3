<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DomainTest extends TestCase
{
    use DatabaseTransactions;

    protected $domain;

    public function setUp()
    {
        parent::setUp();

	$this->domain = factory(\App\Models\Domain::class)->create();
    }

    public function testDomainHasWebsites()
    {
        $this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->domain->websites);
    }

    public function testDomainHasZones()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->domain->zones);
    }

    public function testDomainHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->domain->creator);
    }

    public function testDomainHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->domain->owner);
    }
}
