<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryTest extends TestCase
{
    use DatabaseTransactions;

    protected $category;

    public function setUp()
    {
        parent::setUp();

	$this->category = factory(\App\Models\Category::class)->create();
    }

    public function testCategoryHasPages()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->category->pages);
    }

    public function testCategoryHasPosts()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->category->posts);
    }

    public function testCategoryHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->category->creator);
    }

    public function testCategoryHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->category->owner);
    }
}
