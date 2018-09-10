<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OrganizationTest extends TestCase
{
    use DatabaseTransactions;

    protected $organization;

    public function setUp()
    {
        parent::setUp();

	$this->organization = factory(\App\Models\Organization::class)->create();
    }

    public function testOrganizationHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->organization->creator);
    }

    public function testOrganizationHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->organization->owner);
    }
}
