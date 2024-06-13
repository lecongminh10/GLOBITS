<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService extends BaseService
{
        protected $userService;

        public function __construct(UserRepository $userService)
        {
            parent::__construct($userService);
            $this ->userService = $userService;
        }

        public function createUser(array $data)
        {
            // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
            $data['password'] = bcrypt($data['password']);
            
            return $this->userService->create($data);
        }

        public function updateUser($id, array $data)
        {
            // Kiểm tra xem người dùng có tồn tại không
            $this->userService->getById($id);
    
            // Cập nhật thông tin người dùng
            return $this->userService->update($id, $data);
        }

        public function  getID_Name(){
           return $this ->userService -> getID_Name();
        }
}