<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    protected $user;

    public function setUp()
    {
        parent::setUp();

	$this->user = factory(\App\Models\User::class)->create();
    }
}
