<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TaskController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        $tasks = Task::all();
        return view('dashboard')
            ->with(
                ['tasks' => $tasks]
            );
    }

    // Creating Task
    public function addTask()
    {
        return view('addTask');
    }

    public function storeTask(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'status' => 'required',
            ]);

            $task = new Task();
            $task->title = $request->title;
            $task->description = $request->description;
            $task->status = $request->status;
            $task->save();

            return redirect()->route('dashboard')
                ->with([
                    'success' => 'Task added successfully!'
                ]);
        } catch (Throwable $e) {
            return redirect()->back()
                ->with([
                    'error' => $e->getMessage()
                ]);
        }
    }

    // Editing Task
    public function editTask($id)
    {
        $task = Task::find($id);
        return view('editTask', compact('task'));
    }

    public function updateTask(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'status' => 'required',
            ]);

            $task = Task::find($request->taskId);
            $task->title = $request->title;
            $task->description = $request->description;
            $task->status = $request->status;
            $task->save();

            return redirect()->route('dashboard')
                ->with([
                    'success' => 'Task updated successfully!'
                ]);
        } catch (Throwable $e) {
            return redirect()->back()
                ->with([
                    'error' => $e->getMessage()
                ]);
        }
    }

    // Deleting Task
    public function deleteTask($id)
    {
        try {
            $task = Task::find($id);
            $task->delete();

            return redirect()->route('dashboard')
                ->with([
                    'success' => 'Task deleted successfully!'
                ]);
        } catch (Throwable $e) {
            return redirect()->back()
                ->with([
                    'error' => $e->getMessage()
                ]);
        }
    }
}
