<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransactionTest extends TestCase
{
    use DatabaseTransactions;

    protected $transaction;

    public function setUp()
    {
        parent::setUp();

	$this->transaction = factory(\App\Models\Transaction::class)->create();
    }
}
