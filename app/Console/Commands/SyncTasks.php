<?php

namespace App\Console\Commands;

use App\Models\Task;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SyncTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
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

        $this->info('Tasks fetched and synchronized successfully');
    }
}
