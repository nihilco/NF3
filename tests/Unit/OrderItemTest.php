<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OrderItemTest extends TestCase
{
    use DatabaseTransactions;

    protected $orderItem;

    public function setUp()
    {
        parent::setUp();

	$this->orderItem = factory(\App\Models\OrderItem::class)->create();
    }
    
    public function testOrderItemHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->orderItem->creator);
    }

    public function testOrderItemHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->orderItem->owner);
    }
}
