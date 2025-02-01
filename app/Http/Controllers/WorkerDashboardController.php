<?php

use App\Http\Controllers\Controller;

class WorkerDashboardController extends Controller
{
    public function index()
    {
        $widgets = [
            ['title' => 'Total Tasks', 'value' => '150', 'icon' => 'fas fa-tasks'],
            ['title' => 'Completed Tasks', 'value' => '120', 'icon' => 'fas fa-check-circle'],
            ['title' => 'Pending Tasks', 'value' => '30', 'icon' => 'fas fa-hourglass-half'],
        ];

        $tasks = [
            ['name' => 'Task 1', 'status' => 'Completed', 'due_date' => '2023-10-01'],
            ['name' => 'Task 2', 'status' => 'Pending', 'due_date' => '2023-10-05'],
            ['name' => 'Task 3', 'status' => 'In Progress', 'due_date' => '2023-10-10'],
        ];

        return view('dashboard', compact('widgets', 'tasks'));
    }
    
}

