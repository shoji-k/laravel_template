<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class TodoTest extends TestCase
{
    /**
     * @return void
     */
    public function testAccessTodos()
    {
        $response = $this->get('/todos');
        $response->assertSeeText('Todo list');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testAccessTodosNew()
    {
        $response = $this->get('/todos/create');
        $response->assertSeeText('Create Todo');
        $response->assertStatus(200);
    }
}
