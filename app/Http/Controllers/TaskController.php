<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        return Task::with('project')->get();
    }

    public function store(StoreTaskRequest $request)
    {
        return Task::create($request->validated());
    }

    public function show(Task $task)
    {
        return $task->load('project');
    }

    public function update(StoreTaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->noContent();
    }
}