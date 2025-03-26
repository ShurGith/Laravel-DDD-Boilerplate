<?php
    
    namespace Src\Admin\User\domain\entities;
    
    use Src\Admin\User\domain\value_objects\UserEmail;
    use Src\Admin\User\domain\value_objects\UserName;
    
    class User
    {
        protected $id;
        protected UserName $name;
        protected UserEmail $email;
        
        public function __construct(int $id, UserName $name, UserEmail $email)
        {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
        }
        
        public function name(): UserName
        {
            return $this->name;
        }
        
        public function email(): UserEmail
        {
            return $this->email;
        }
    }