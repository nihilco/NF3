<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VoteTest extends TestCase
{
    use DatabaseTransactions;

    protected $vote;

    public function setUp()
    {
        parent::setUp();

	$this->vote = factory(\App\Models\Vote::class)->create();
    }

    public function testVoteHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->vote->creator);
    }

    public function testVoteHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->vote->owner);
    }
}
