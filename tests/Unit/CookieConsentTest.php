<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CookieConsentTest extends TestCase
{
    use DatabaseTransactions;

    protected $cookieConsent;

    public function setUp()
    {
        parent::setUp();

	$this->cookieConsent = factory(\App\Models\CookieConsent::class)->create();
    }
}
