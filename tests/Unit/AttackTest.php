<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AttackTest extends TestCase
{
    use DatabaseTransactions;

    protected $attack;

    public function setUp()
    {
	parent::setUp();
	
	$this->attack = factory(\App\Models\Attack::class)->create();
    }

    public function testAttackHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->attack->creator);
    }

    public function testAttackHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->attack->owner);
    }
}
