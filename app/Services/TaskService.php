<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
  // Method to fetch all tasks
  public function getAllTasks()
  {
    // Return all tasks (you could add pagination, sorting, or filters here)
    return Task::all();
  }
}
