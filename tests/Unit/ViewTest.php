<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewTest extends TestCase
{
    use DatabaseTransactions;

    protected $viewModel;

    public function setUp()
    {
        parent::setUp();

	$this->viewModel = factory(\App\Models\View::class)->create();
    }

    public function testViewHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->viewModel->creator);
    }

    public function testViewHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->viewModel->owner);
    }
}
