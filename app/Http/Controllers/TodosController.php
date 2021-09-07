<?php

namespace App\Http\Controllers;

class TodosController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $todos = [
            'buy milk',
            'take a walk'
        ];
        return view('todos.index', [
            'todos' => $todos
        ]);
    }
}
