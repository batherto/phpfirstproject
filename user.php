<?php
class User {
    //THIS!
    public $name;
    public $email;

    
    //constructor method (__construct is a standard in PHP an called by the 'new' keyword)
    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;


    }
    public function getType(){
        return $this->type;
    }
}


class Admin extends User{
    
    public $permissionLevel;
    public $type = 'Admin';

    //constructor method (__construct is a standard in PHP an called by the 'new' keyword)
    public function __construct($name, $email, $permissionLevel){
        parent::__construct(name,email);
        $this->permissionLevel = $permissionLevel;
    }

    public function getType(){
        return 'This is an admin with a type of... '.parent::getType();

    }

}

class Member extends User{
    
    public $dateadded;
    public $type = 'Member';

    //constructor method (__construct is a standard in PHP an called by the 'new' keyword)
    public function __construct($name, $email, $permissionLevel){
        parent::__construct(name,email);
        $this->dateAdded = $dateAdded;
    }

    public function getType(){
        return 'Hello from '.parent::getType();

    }
}

 ?>