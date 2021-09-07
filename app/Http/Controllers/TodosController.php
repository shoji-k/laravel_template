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
            'buy milk'
        ];
        return view('todos.index', [
            'todos' => $todos
        ]);
    }
}
