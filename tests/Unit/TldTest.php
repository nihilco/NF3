<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TldTest extends TestCase
{
    use DatabaseTransactions;

    protected $tld;

    public function setUp()
    {
        parent::setUp();

	$this->tld = factory(\App\Models\Tld::class)->create();
    }

    public function testTldHasDomains()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->tld->domains);
    }

    public function testTldHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->tld->creator);
    }

    public function testTldHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->tld->owner);
    }
}
