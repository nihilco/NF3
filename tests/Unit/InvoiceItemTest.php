<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InvoiceItemTest extends TestCase
{
    use DatabaseTransactions;

    protected $invoiceItem;

    public function setUp()
    {
        parent::setUp();

	$this->invoiceItem = factory(\App\Models\InvoiceItem::class)->create();
    }

    public function testInvoiceItemHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->invoiceItem->creator);
    }

    public function testInvoiceItemHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->invoiceItem->owner);
    }
}
