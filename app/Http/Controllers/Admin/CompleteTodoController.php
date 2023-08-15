<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Todo;

class CompleteTodoController extends Controller
{

    public function __invoke(Todo $todo)
    {
        $todo->update(['completed_at' => $todo->completed_at ? null : now()]);
        return redirect()->route('admin.todos.index')->with('success', 'Todo Updated Successfully');
    }
}
