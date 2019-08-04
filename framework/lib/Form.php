<?php

namespace framework;


class Form{


    public function label($name, $id, $class = null){
        return '<label class="'.$class.'" for="'.$id.'">'.$name.' :</label>';
    }
    public function input($type, $id, $valueContent, $class = null){
        var_dump($valueContent);
        return '<input type="'.$type.'" name="'.$id.'" id="'.$id.'" class="'.$class.'" value="'.$valueContent.'" required />';
    }
    public function textarea($id,  $valueContent, $class = null){
        return '<textarea name="'.$id.'" id="'.$id.'" class="'.$class.'" cols="300" rows="20"  required>'.$valueContent.'</textarea>';
    }
    public function submit($value, $class = null){
        return '<input  type="submit" class="'.$class.'" value="'.$value.'"/>';
    }

}