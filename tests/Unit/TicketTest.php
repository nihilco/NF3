<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TicketTest extends TestCase
{
    use DatabaseTransactions;

    protected $ticket;

    public function setUp()
    {
        parent::setUp();

	$this->ticket = factory(\App\Models\Ticket::class)->create();
    }
    
    public function testTicketHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->ticket->creator);
    }

    public function testTicketHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->ticket->owner);
    }

    public function testTicketHasReplies()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->ticket->replies);
    }
}
