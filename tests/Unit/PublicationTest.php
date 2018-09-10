<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PublicationTest extends TestCase
{
    use DatabaseTransactions;

    protected $publication;

    public function setUp()
    {
        parent::setUp();

	$this->publication = factory(\App\Models\Publication::class)->create();
    }
    
    public function testPublicationHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->publication->creator);
    }

    public function testPublicationHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->publication->owner);
    }
}
