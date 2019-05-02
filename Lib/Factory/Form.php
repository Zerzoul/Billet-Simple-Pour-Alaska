<?php
namespace Factory;

class Form{

    protected $data = [];

    public function __construct($data){
        $this->data = $data;
    }
    public function input($type){
        return '<input type="text" value="'.$this->data[$type].'">';
    }
    public function submit(){
        return '<button type="submit">Envoyer</button>';
    }
}