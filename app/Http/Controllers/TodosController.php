<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
}
