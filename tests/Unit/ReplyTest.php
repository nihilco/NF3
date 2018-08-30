<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReplyTest extends TestCase
{
    use DatabaseTransactions;

    protected $reply;

    public function setUp()
    {
        parent::setUp();

	$this->reply = factory(\App\Models\Reply::class)->create();
    }

    public function testReplyHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->reply->creator);
    }

    public function testReplyHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->reply->owner);
    }
}
