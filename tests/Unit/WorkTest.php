<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorkTest extends TestCase
{
    use DatabaseTransactions;

    protected $work;

    public function setUp()
    {
        parent::setUp();

	$this->work = factory(\App\Models\Work::class)->create();
    }
    
    public function testWorkHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->work->creator);
    }

    public function testWorkHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->work->owner);
    }
}
