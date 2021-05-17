<?php

class Form extends HtmlElement{

   protected array $element = []; 

public function addElement(HtmlElement $el)
{
    $this->element[] = $el;
}

public function render(): string
{
    '<form></form>'
}

}