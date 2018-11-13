<?php

namespace Tests\Unit\Torn;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CompanyTest extends TestCase
{
    use DatabaseTransactions;

    protected $company;

    public function setUp()
    {
        parent::setUp();

	$this->company = factory(\App\Models\Torn\Company::class)->create();
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
