<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class TodosTest extends TestCase
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
        $response = $this->get('/todos/new');
        $response->assertSeeText('Create Todo');
        $response->assertStatus(200);
    }
}
