<?php
    
    namespace Src\Admin\User\domain\value_objects;
    
    use InvalidArgumentException;
    
    class UserName
    {
        private string $name;
        
        public function __construct(string $name)
        {
            if (strlen($name < 3)) {
                throw new InvalidArgumentException("UserName must be at least 3 characters long", "Notice");
            }
            $this->name = $name;
        }
        
        public function value(): string
        {
            return $this->name;
        }
        
    }