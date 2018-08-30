<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AccountTest extends TestCase
{
    use DatabaseTransactions;

    protected $account;

    public function setUp()
    {
	parent::setUp();
	
	$this->account = factory(\App\Models\Account::class)->create();
    }

    public function testAccountHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->account->creator);
    }

    public function testAccountHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->account->owner);
    }
}
