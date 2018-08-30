<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RatingTest extends TestCase
{
    use DatabaseTransactions;

    protected $rating;

    public function setUp()
    {
        parent::setUp();

	$this->rating = factory(\App\Models\Rating::class)->create();
    }

    public function testRatingHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->rating->creator);
    }

    public function testRatingHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->rating->owner);
    }
}
