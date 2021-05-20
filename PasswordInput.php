<?php

class PasswordInput extends BaseInput
{
    public function render() : string
    {
        return sprintf( '<div>
            <label>%s</label><br>
            <input name="%s" value=%s/>
        </div>',$this->label, $this->name, $this->value);
    }
}