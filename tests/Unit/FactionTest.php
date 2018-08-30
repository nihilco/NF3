<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FactionTest extends TestCase
{
    use DatabaseTransactions;

    protected $faction;

    public function setUp()
    {
        parent::setUp();

	$this->faction = factory(\App\Models\Faction::class)->create();
    }

    public function testFactionHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->faction->creator);
    }

    public function testFactionHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->faction->owner);
    }
}
