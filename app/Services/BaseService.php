<?php

namespace App\Services;

use App\Repositories\BaseRepository;

class BaseService
{
    protected $repository;

    public function __construct(BaseRepository $repository )
    {
        $this ->repository = $repository;
    }

    public function getAll(){

        return $this ->repository ->getAll();
    }

    public function getById($id){

        return $this ->repository ->getById($id);
    }

    public function paginate($perPage = 10)
    {
        return $this->repository->paginate($perPage);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
    

    // thêm 

    public function create(array $data){

        return $this ->repository->create($data);
    }

    //
    public function update($id , array $data){
        return $this ->repository ->update($id , $data);
     }
}
