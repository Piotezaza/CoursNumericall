<?php 

require_once('FormItem.php');

class TextItem extends FormItem
{
    public function createView()
    {
        $html = $this->startView();
        $html .= '<input trpe="text" class="form-control" name="' . $this->getName() . '" value="' . $this->getName() . '" />';
        $html .= $this->endView();

        return $html;
    }

    
}