<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmailTest extends TestCase
{
    use DatabaseTransactions;

    protected $email;

    public function setUp()
    {
        parent::setUp();

	$this->email = factory(\App\Models\Email::class)->create();
    }

    public function testEmailHasDomain()
    {
	$this->assertInstanceOf(\App\Models\Domain::class, $this->email->domain);
    }

    public function testEmailHasMailbox()
    {
	$this->assertInstanceOf(\App\Models\Mailbox::class, $this->email->mailbox);
    }

    public function testEmailHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->email->creator);
    }

    public function testEmailHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->email->owner);
    }
}
