<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IssueTest extends TestCase
{
    use DatabaseTransactions;

    protected $issue;

    public function setUp()
    {
        parent::setUp();

	$this->issue = factory(\App\Models\Issue::class)->create();
    }
    
    public function testIssueHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->issue->creator);
    }

    public function testIssueHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->issue->owner);
    }

    public function testIssueHasReplies()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->issue->replies);
    }
}
