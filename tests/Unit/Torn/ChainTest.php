<?php

namespace Tests\Unit\Torn;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChainTest extends TestCase
{
    use DatabaseTransactions;

    protected $chain;

    public function setUp()
    {
        parent::setUp();

	$this->chain = factory(\App\Models\Torn\Chain::class)->create();
    }

    public function testChainHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->chain->creator);
    }

    public function testChainHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->chain->owner);
    }
}
