<?php

// VERSION À FAIRE À CHAQUE FOIS (methode dans if et ensuite le reste dans le if)
if($_POST)
{
    if(!empty($_POST)
    {
        $file =fopen("infos.txt", "w");
        fwrite($file, )
    }
    else 
    {
        $result = array(
            "code" => "error",
            "message" => "Les données n'ont pas été envoyées"
        );
    }
}

