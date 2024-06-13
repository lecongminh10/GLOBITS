<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class  BaseRepository
{
     protected $model;

     public function __construct(Model $model)
     {
        $this ->model = $model;
     }


     public function getAll(){

        return $this ->model ->all();
     }



     public function getById($id){
        return $this ->model ->findOrFail($id);
     }
     public function paginate($perPage = 10)
     {
         return $this->model->paginate($perPage);
     }


     public function delete($id){

        $exmaple = $this ->model-> find($id);
        if($exmaple){
            $exmaple ->delete();
            return true;
        }
        return false;
     }

     // thêm mới 

     public function create(array $data){
        return $this ->model ->create($data);
     }

     // Update


     public function update($id, array $data)
     {
         $record = $this->getById($id);
 
         if (!$record) {
             return null;
         }
 
         $record->update($data);
         return $record;
     }


     
 
     

}