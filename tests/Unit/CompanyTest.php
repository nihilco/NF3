<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CompanyTest extends TestCase
{
    use DatabaseTransactions;

    protected $company;

    public function setUp()
    {
        parent::setUp();

	$this->company = factory(\App\Models\Company::class)->create();
    }

    public function testCompanyHasCreator()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->company->creator);
    }

    public function testCompanyHasOwner()
    {
	$this->assertInstanceOf(\App\Models\User::class, $this->company->owner);
    }
}
