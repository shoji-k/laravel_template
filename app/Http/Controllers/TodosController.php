<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $todos = DB::table('todos')->get();
        return view('todos.index', [
            'todos' => $todos
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function new()
    {
        return view('todos.new');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $request->validate([
            'todo' => 'required|string'
        ]);
        Todo::create([
            'todo' => $request->todo
        ]);
        return redirect('todos.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit', [
            'todo' => $todo
        ]);
    }
}
