<?php
    
    namespace Src\Admin\User\domain\contracts;
    
    use Src\Admin\User\domain\entities\User;
    
    interface UserRepositoryInterface
    {
        public function findById(int $id): ?User;
        
        public function save(User $user);
    }
    