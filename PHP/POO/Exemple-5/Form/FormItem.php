<?php 

abstract class FormItem
{
    protected $name;
    protected $value;

    public function __construct($name)
    {
        $this->setName($name);
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

    public abstract function createView();

    protected function startView()
    {
        $html = '<div class="form-group">
        <label></label>';

        return $html;
    }

    protected function endView()
    {
        $html = '</div>';
        return $html;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}