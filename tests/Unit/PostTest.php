<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    use DatabaseTransactions;

    protected $post;

    public function setUp()
    {
        parent::setUp();

	$this->post = factory(\App\Models\Post::class)->create();
    }

    public function testPostHasWebsite()
    {
	$this->assertInstanceOf(\App\Models\Website::class, $this->post->website);
    }

    public function testPostHasCategories()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->post->categories);
    }

    public function testPostHasTags()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->post->tags);
    }

    public function testPostHasReplies()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->post->replies);
    }
}
