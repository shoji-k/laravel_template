<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class TodosTest extends TestCase
{
    /**
     * @return void
     */
    public function testStatusCode()
    {
        $response = $this->get('/todos');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testBody()
    {
        $response = $this->get('/todos');
        $response->assertSeeText('Todo list');
    }
}
