<?php
    
    namespace Src\Admin\User\domain\value_objects;
    
    class UserEmail
    {
        private string $email;
        
        public function __construct(string $email)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new InvalidArgumentException("Invalid email format", "Notice");
            }
            $this->email = $email;
        }
        
        public function value(): string
        {
            return $this->email;
        }
        
        
    }