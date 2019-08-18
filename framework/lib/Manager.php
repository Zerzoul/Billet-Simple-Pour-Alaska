<?php
namespace framework;

class Manager{

    protected $pdo;
    protected $manager;

    /*PUBLICATION STATUE POST*/
    const PUBLISHED = 1;
    const VALIDATION_BEFORE = 2;
    const ROUGH = 3;

    /*PUBLICATION STATUE COMS*/
    const COM_VALID = 4;
    const COM_IGNORE = 5;
    const COM_NEW = 6;

    /*STATUE USER*/
    const USER_ACTIF = 7;
    const USER_BANNED = 8;

    public function __construct($dbConnect){
        $this->pdo = $dbConnect;

        if(is_null($this->manager)){
            $split = explode('\\', get_class($this));
            $class_name = end($split);

            $this->manager = $class_name;
        }
        return $this->manager;
    }
}
