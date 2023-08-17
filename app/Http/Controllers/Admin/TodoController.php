<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TodoRequest;
use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{
    private string $routeResourceName = 'todos';

    public function __construct()
    {
        $this->middleware("can:$this->routeResourceName-create")->only(['create', 'store']);
        $this->middleware("can:$this->routeResourceName-read")->only('index');
        $this->middleware("can:$this->routeResourceName-update")->only(['edit', 'update']);
        $this->middleware("can:$this->routeResourceName-delete")->only('destroy');
    }

    public function index(Request $request)
    {
        $todo = Todo::query()
            ->select(['id', 'title', 'description', 'completed_at', 'created_at'])
            ->withCount('tasks')
            ->filter($request->search, ['title', 'description'])
            ->latest('id')
            ->paginate(10);

        return Inertia::render('Todo/Index', [
            'title' => 'Todos',
            'items' => TodoResource::collection($todo),
            'headers' => [
                [
                    'label' => '#',
                    'data' => '#',
                ],
                [
                    'label' => 'Title',
                    'data' => 'title',
                ],
                [
                    'label' => 'Tasks',
                    'data' => 'tasks_count',
                ],
                [
                    'label' => 'Description',
                    'data' => 'description',
                ],
                [
                    'label' => 'Created At',
                    'data' => 'created_at',
                ],
                [
                    'label' => 'Actions',
                    'data' => 'actions',
                ],
            ],
            'routeResourceName' => $this->routeResourceName,
            'filters' => (object) $request->all(),
            'can' => [
                'create' => $request->user()?->can('todos-create'),
            ],
        ]);

    }

    public function create()
    {
        return Inertia::render('Todo/Create', [
            'action' => 'create',
            'routeResourceName' => $this->routeResourceName,
        ]);
    }

    public function store(TodoRequest $request)
    {
        $request->user()->todos()->create($request->validated());
        return to_route('admin.todos.index')->with('success', 'Todo Created Successfully');
    }
    public function edit(Todo $todo)
    {
        return Inertia::render('Todo/Create', [
            'item' => new TodoResource($todo),
            'action' => 'edit',
            'routeResourceName' => $this->routeResourceName,
        ]);
    }

    public function update(TodoRequest $request, Todo $todo)
    {
        $todo->update($request->validated());
        return to_route('admin.todos.index')->with('success', 'Todo Updated Successfully');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return to_route('admin.todos.index')->with('error', 'Todo Deleted Successfully');
    }
}
