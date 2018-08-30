<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InvoiceTest extends TestCase
{
    use DatabaseTransactions;

    protected $invoice;

    public function setUp()
    {
        parent::setUp();

	$this->invoice = factory(\App\Models\Invoice::class)->create();
    }

    public function testInvoiceHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->invoice->creator);
    }

    public function testInvoiceHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->invoice->owner);
    }
}
