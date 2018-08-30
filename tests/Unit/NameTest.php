<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NameTest extends TestCase
{
    use DatabaseTransactions;

    protected $name;

    public function setUp()
    {
        parent::setUp();

	$this->name = factory(\App\Models\Name::class)->create();
    }

    public function testNameHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->name->creator);
    }

    public function testNameHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->name->owner);
    }
}
