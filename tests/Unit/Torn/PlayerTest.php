<?php

namespace Tests\Unit\Torn;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlayerTest extends TestCase
{
    use DatabaseTransactions;

    protected $player;

    public function setUp()
    {
        parent::setUp();

	$this->player = factory(\App\Models\Torn\Player::class)->create();
    }

    public function testPlayerHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->player->creator);
    }

    public function testPlayerHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->player->owner);
    }
}
