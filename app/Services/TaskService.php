<?php

namespace App\Services;

use App\Repositories\TaskRepository;

class TaskService extends BaseService
{
        protected $taskService;

        public function __construct(TaskRepository $taskService)
        {
            parent::__construct($taskService);
            $this ->taskService = $taskService;
        }
        public function createTask(array $data)
        {
            return $this->taskService->createRepository($data);
        }
        public function updateTask($id, array $data)
        {

            $this->taskService->getById($id);
            return $this->taskService->update($id, $data);
        }

        public function getAll(){
            return $this ->taskService ->getAll();
        }


}