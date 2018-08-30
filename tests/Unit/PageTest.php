<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{
    use DatabaseTransactions;

    protected $page;

    public function setUp()
    {
        parent::setUp();

	$this->page = factory(\App\Models\Page::class)->create();
    }

    public function testPageHasCategories()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->page->categories);
    }

    public function testPageHasTags()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->page->tags);
    }
}
