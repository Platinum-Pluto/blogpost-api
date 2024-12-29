<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $task = Task::create($validated);
        return response()->json($task, 201);
    }

    public function markCompleted(Task $task)
    {
        $task->update(['is_completed' => true]);
        return response()->json($task);
    }

    public function pending()
    {
        return response()->json(Task::where('is_completed', false)->get());
    }
}