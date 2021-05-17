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
    $content = implode(PHP_EOL,array_map(fn($el)=> $el->render(), $this->element));
    return sprintf( '<form action="%s" method="%s">%s</form>',$this->action, $this->method, $content);
}

}