<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ObituaryTest extends TestCase
{
    use DatabaseTransactions;

    protected $obituary;

    public function setUp()
    {
        parent::setUp();

	$this->obituary = factory(\App\Models\Obituary::class)->create();
    }

    public function testObituaryHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->obituary->creator);
    }

    public function testObituaryHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->obituary->owner);
    }
}
