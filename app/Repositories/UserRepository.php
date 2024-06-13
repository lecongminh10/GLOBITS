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
  
    public function create(array $data)
    {
        $userRepository = $this->userRepository->create($data);

        if (isset($data['roles'])) {
            $userRepository->roles()->attach($data['roles']);
        }

        return $userRepository;
    }
    
    public function update($id, array $data)
    {
        $userRepository = $this->userRepository->findOrFail($id);

        $userRepository->update($data);

        if (isset($data['roles'])) {
            $userRepository->roles()->sync($data['roles']);
        }

        return $userRepository;
    }

     // $user= User::getID_Name();

     public function getID_Name(){
        $userRepository = User::select('id', 'name')->get();
        return $userRepository;
    }


}