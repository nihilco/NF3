<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OrderTest extends TestCase
{
    use DatabaseTransactions;

    protected $order;

    public function setUp()
    {
        parent::setUp();

	$this->order = factory(\App\Models\Order::class)->create();
    }
    
    public function testOrderHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->order->creator);
    }

    public function testOrderHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->order->owner);
    }
}
