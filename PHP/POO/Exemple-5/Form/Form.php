<?php 

class Form
{
    private $name;
    private $method;
    private $action;
    private $attr;

    public function __construct($name, $method = 'POST', $action = "", $attr = array())
    {
        $this->setName($name);
        $this->setMethod($method);
        $this->setAttr($attr);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }
 
    public function getAttr() : array
    {
        return $this->attr;
    }
 
    public function setAttr(array $attr) // array ('class' => 'form')
    {
        $this->attr = $attr;

        return $this;
    }

    public function createView()
    {
        $html = '<form name="' 
        . $this->getName() 
        . '" method="' 
        . $this->getMethod()
        . '" action="' 
        . $this->getAction()
        . '">'
        ;

        foreach ($this->getAttr() as $key => $value) {
            $html . $key . '="' . $value . '" ';
        }

        $html .= '>'

        $html .= '</form>';

        return $html;
    }
}