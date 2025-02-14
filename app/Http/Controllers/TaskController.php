<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Services\TaskService;
use App\Http\Resources\TaskResource;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index(TaskRequest $request)
    {
        $tasks = $this->taskService->getAllTasks();

        return TaskResource::collection($tasks);
    }
}
