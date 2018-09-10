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

    public function testPageHasWebsite()
    {
	$this->assertInstanceOf(\App\Models\Website::class, $this->page->website);
    }

    public function testPageHasCategories()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->page->categories);
    }
}
