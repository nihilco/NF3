<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ThreadTest extends TestCase
{
    use DatabaseTransactions;

    protected $thread;

    public function setUp()
    {
        parent::setUp();

	$this->thread = factory(\App\Models\Thread::class)->create();
    }
    
    public function testThreadHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->thread->creator);
    }

    public function testThreadHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->thread->owner);
    }

    public function testThreadHasReplies()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->thread->replies);
    }
}
