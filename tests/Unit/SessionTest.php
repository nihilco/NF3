<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SessionTest extends TestCase
{
    use DatabaseTransactions;

    protected $session;

    public function setUp()
    {
        parent::setUp();

	$this->session = factory(\App\Models\Session::class)->create();
    }
}
