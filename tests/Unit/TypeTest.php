<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TypeTest extends TestCase
{
    use DatabaseTransactions;

    protected $type;

    public function setUp()
    {
        parent::setUp();

	$this->type = factory(\App\Models\Type::class)->create();
    }
    
    public function testTypeHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->type->creator);
    }

    public function testTypeHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->type->owner);
    }

    public function testTypeHasNullParent()
    {
	$this->assertNull($this->type->parent);
    }

    public function testTypeHasParent()
    {
	$parent = factory(\App\Models\Type::class)->create();

	$this->type->parent_id = $parent->id;
	$this->type->save();

	$this->assertInstanceOf(\App\Models\Type::class, $this->type->parent);
    }

    public function testTypeHasChildren()
    {
	$this->assertInstanceOf(\Illuminate\Support\Collection::class, $this->type->children);
    }
}
