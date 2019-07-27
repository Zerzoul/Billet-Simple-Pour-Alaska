<?php

namespace framework;


class Form{


    public function label($name, $id, $class = null){
        return '<label class="'.$class.'" for="'.$id.'">'.$name.' :</label>';
    }
    public function input($type, $id, $class = null){
        return '<input type="'.$type.'" name="'.$id.'" id="'.$id.'" class="'.$class.'" />';
    }
    public function textarea($id, $class = null){
        return '<textarea name="'.$id.'" id="'.$id.'" class="'.$class.'"></textarea>';
    }
    public function submit($type, $class = null){
        return '<button type="'.$type.'" class="'.$class.'" >Submit</button>';
    }

}