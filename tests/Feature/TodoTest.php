<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

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
    public function testAccessTodosCreate()
    {
        $response = $this->get('/todos/create');
        $response->assertSeeText('Create Todo');
        $response->assertStatus(200);
    }

        /**
     * @return void
     */
    public function testAccessTodosEdit()
    {
        $todo = Todo::factory()->create();
        $response = $this->get("/todos/{$todo->id}/edit");
        $response->assertSeeText('Edit Todo');
        $response->assertStatus(200);
    }
}
