<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DefaultTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexView()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
