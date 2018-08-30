<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RecordTest extends TestCase
{
    use DatabaseTransactions;

    protected $record;

    public function setUp()
    {
        parent::setUp();

	$this->record = factory(\App\Models\Record::class)->create();
    }

    public function testRecordHasZone()
    {
	$this->assertInstanceOf(\App\Models\Zone::class, $this->record->zone);
    }

    public function testRecordHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->record->creator);
    }

    public function testRecordHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->record->owner);
    }
}
