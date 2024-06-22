<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    protected $userRepository;

    public function __construct(User $userRepository){
        parent::__construct($userRepository);
        $this ->userRepository = $userRepository;
    }
  

     public function getID_Name(){
        $userRepository = User::select('id', 'name')->get();
        return $userRepository;
    }


}