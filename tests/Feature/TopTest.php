<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TopTest extends TestCase
{
    /**
     * Access top page
     *
     * @return void
     */
    public function testShowTopPage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
