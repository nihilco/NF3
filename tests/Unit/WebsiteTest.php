<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WebsiteTest extends TestCase
{
    use DatabaseTransactions;

    protected $website;

    public function setUp()
    {
        parent::setUp();

	$this->website = factory(\App\Models\Website::class)->create();
    }

    public function testWebsiteHasDomain()
    {
	$this->assertInstanceOf(\App\Models\Domain::class, $this->website->domain);
    }

    public function testWebsiteHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->website->creator);
    }

    public function testWebsiteHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->website->owner);
    }
}
