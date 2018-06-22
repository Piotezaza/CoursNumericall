<?php 

class Form
{
    private $name;
    private $method;
    private $action;
    private $attr;

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
 
    public function getAttr()
    {
        return $this->attr;
    }
 
    public function setAttr($attr)
    {
        $this->attr = $attr;

        return $this;
    }
}