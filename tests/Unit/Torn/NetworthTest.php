<?php

namespace Tests\Unit\Torn;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NetworthTest extends TestCase
{
    use DatabaseTransactions;

    protected $networth;

    public function setUp()
    {
        parent::setUp();

	$this->networth = factory(\App\Models\Torn\Networth::class)->create();
    }

    public function testNetworthHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->networth->creator);
    }

    public function testNetworthHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->networth->owner);
    }

    public function testNetworthHasPlayer()
    {
	$this->assertInstanceOf(\App\Models\Torn\Player::class, $this->networth->player);
    }
}
