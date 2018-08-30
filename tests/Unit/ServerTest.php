<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ServerTest extends TestCase
{
    use Databasetransactions;

    protected $server;

    public function setUp()
    {
        parent::setUp();

	$this->server = factory(\App\Models\Server::class)->create();
    }

    public function testServerHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->server->creator);
    }

    public function testServerHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->server->owner);
    }
}
