<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::orderBy('due_date', 'asc')->get();

        return view('tasks.index', compact('tasks'));
    }

    // Add a new task
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'category' => 'required',
            'due_date' => 'required|date',
        ]);

        Task::create([
            'task' => $request->task,
            'category' => $request->category,
            'due_date' => $request->due_date,
            'completed' => false,
        ]);

        return redirect()->route('tasks.index')
            ->with('success', 'Task added successfully!');
    }

    // Show edit page
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task' => 'required',
            'category' => 'required',
            'due_date' => 'required|date',
        ]);

        $task->update([
            'task' => $request->task,
            'category' => $request->category,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully!');
    }

    // Delete task
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully!');
    }

    // Complete task
    public function complete(Task $task)
    {
        $task->update([
            'completed' => !$task->completed
        ]);

        return redirect()->route('tasks.index');
    }
}