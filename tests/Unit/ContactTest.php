<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactTest extends TestCase
{
    use DatabaseTransactions;

    protected $contact;

    public function setUp()
    {
        parent::setUp();

	$this->contact = factory(\App\Models\Contact::class)->create();
    }

    public function testContactHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->contact->creator);
    }

    public function testContactHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->contact->owner);
    }
}
