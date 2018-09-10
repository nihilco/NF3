<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TagTest extends TestCase
{
    use DatabaseTransactions;

    protected $tag;

    public function setUp()
    {
        parent::setUp();

	$this->tag = factory(\App\Models\Tag::class)->create();
    }
    
    public function testTagHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->tag->creator);
    }

    public function testTagHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->tag->owner);
    }
}
