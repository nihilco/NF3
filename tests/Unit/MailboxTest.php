<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MailboxTest extends TestCase
{
    use DatabaseTransactions;

    protected $mailbox;

    public function setUp()
    {
        parent::setUp();

	$this->mailbox = factory(\App\Models\Mailbox::class)->create();
    }

    public function testMailboxHasDomain()
    {
	$this->assertInstanceOf(\App\Models\Domain::class, $this->mailbox->domain);
    }

    public function testMailboxHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->mailbox->creator);
    }

    public function testMailboxHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->mailbox->owner);
    }
}
