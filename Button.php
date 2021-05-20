<?php
class Button extends HtmlElement{

    public string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
    public function render() : string
    {
        return sprintf('<btton>%s</button>', $this->text);
    }

}