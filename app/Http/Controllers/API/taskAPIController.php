<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatetaskAPIRequest;
use App\Http\Requests\API\UpdatetaskAPIRequest;
use App\Models\task;
use App\Repositories\taskRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class taskController
 * @package App\Http\Controllers\API
 */

class taskAPIController extends AppBaseController
{
    /** @var  taskRepository */
    private $taskRepository;

    public function __construct(taskRepository $taskRepo)
    {
        $this->taskRepository = $taskRepo;
    }

    /**
     * Display a listing of the task.
     * GET|HEAD /tasks
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tasks = $this->taskRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tasks->toArray(), 'Tasks retrieved successfully');
    }

    /**
     * Store a newly created task in storage.
     * POST /tasks
     *
     * @param CreatetaskAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatetaskAPIRequest $request)
    {
        $input = $request->all();

        $task = $this->taskRepository->create($input);

        return $this->sendResponse($task->toArray(), 'Task saved successfully');
    }

    /**
     * Display the specified task.
     * GET|HEAD /tasks/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var task $task */
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            return $this->sendError('Task not found');
        }

        return $this->sendResponse($task->toArray(), 'Task retrieved successfully');
    }

    /**
     * Update the specified task in storage.
     * PUT/PATCH /tasks/{id}
     *
     * @param int $id
     * @param UpdatetaskAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetaskAPIRequest $request)
    {
        $input = $request->all();

        /** @var task $task */
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            return $this->sendError('Task not found');
        }

        $task = $this->taskRepository->update($input, $id);

        return $this->sendResponse($task->toArray(), 'task updated successfully');
    }

    /**
     * Remove the specified task from storage.
     * DELETE /tasks/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var task $task */
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            return $this->sendError('Task not found');
        }

        $task->delete();

        return $this->sendResponse($id, 'Task deleted successfully');
    }
}
