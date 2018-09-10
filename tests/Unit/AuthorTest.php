<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthorTest extends TestCase
{
    use DatabaseTransactions;

    protected $author;

    public function setUp()
    {
        parent::setUp();

	$this->author = factory(\App\Models\Author::class)->create();
    }
    
    public function testAuthorHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->author->creator);
    }

    public function testAuthorHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->author->owner);
    }
}
