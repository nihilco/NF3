<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CustomerTest extends TestCase
{
    use DatabaseTransactions;

    protected $customer;

    public function setUp()
    {
        parent::setUp();

	$this->customer = factory(\App\Models\Customer::class)->create();
    }

    public function testCustomerHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->customer->creator);
    }

    public function testCustomerHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->customer->owner);
    }
}
