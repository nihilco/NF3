<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AliasTest extends TestCase
{
    use DatabaseTransactions;

    protected $alias;

    public function setUp()
    {
        parent::setUp();

	$this->alias = factory(\App\Models\Alias::class)->create();
    }

    public function testAliasHasDomain()
    {
	$this->assertInstanceOf(\App\Models\Domain::class, $this->alias->domain);
    }

    public function testAliasHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->alias->creator);
    }

    public function testAliasHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->alias->owner);
    }
}
