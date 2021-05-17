<?php

class Form extends HtmlElement{

    public string $action;
    public string $method;

   protected array $element = []; 

   public function __construct(string $action='', string $method='get')
   {
       $this->action = $action;
       $this->method = $method;
   }

public function addElement(HtmlElement $el)
{
    $this->element[] = $el;
}

public function render(): string
{
    '<form></form>'
}

}