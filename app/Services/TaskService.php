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

        public function getAll(){
            return $this ->taskService ->getAll();
        }


}