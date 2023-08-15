<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TaskController extends Controller
{
    public function fetchTasksFromApi()
    {
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/todos');
        $tasks = json_decode($response->getBody(), true);

        foreach ($tasks as $task) {
            Task::updateOrCreate(['api_id' => $task['id']], [
                'title' => $task['title'],
                'description' => 'No description available',
                'status' => $task['completed'] ? 'completed' : 'pending',
            ]);
        }

        return response()->json(['message' => 'Tasks fetched and synchronized successfully']);
    }
}
