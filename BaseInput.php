<?php

abstract class BaseInput extends HtmlElement{

 public string $label;
 public string $name;
 public string $value;

 public function __construct( string $name, string $label='',string $value='')
 {
     $this->label = $label;
     $this->name = $name;
     $this->value = $value;
 }

 public function render() : string
    {
        return sprintf( '<div class="form-group">
        <label>%s</label><br>

      
        <input type="password" name="%s" value=%s>
    </div>',$this->label, $this->renderInput());
    }
    abstract public function renderInput() : string;
    

    

}

