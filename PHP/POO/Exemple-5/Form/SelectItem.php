<?php 

class SelectItem extends FormItem
{

    private $options;

    public function __construct($name, $label, $options)
    {
        $this->setOptions($options);
    }
    
    public function createView()
    {
        $html = $this->startView();
        $html .= '<select class="form-control" name="' . $this->getName() . '" />';
        foreach ($this->getOptions() as $key => $value) {
            $html .= '<option value="' . $value . '">' . $key . '</option>';
        }
        $html .= '</select>';
        $html .= $this->endView();

        return $html;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
}