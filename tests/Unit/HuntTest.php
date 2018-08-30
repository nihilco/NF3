<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HuntTest extends TestCase
{
    use DatabaseTransactions;

    protected $hunt;

    public function setUp()
    {
        parent::setUp();

	$this->hunt = factory(\App\Models\Hunt::class)->create();
    }

    public function testHuntHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->hunt->creator);
    }

    public function testHuntHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->hunt->owner);
    }
}
