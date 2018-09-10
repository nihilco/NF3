<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductTest extends TestCase
{
    use DatabaseTransactions;

    protected $product;

    public function setUp()
    {
        parent::setUp();

	$this->product = factory(\App\Models\Product::class)->create();
    }
    
    public function testProductHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->product->creator);
    }

    public function testProductHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->product->owner);
    }
}
