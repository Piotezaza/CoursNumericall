<?php


if($_POST)
{
    if(!empty($_POST))
    {
        $str =  "Maison: " . $_POST['nom'] . PHP_EOL
                . "Matériaux structure: " . $_POST['matStructure'] . PHP_EOL
                . "Matériaux toiture: " . $_POST['matToiture'] . PHP_EOL
                . "Pièces: " . $_POST['pieces'] . PHP_EOL
                ;
        
        $file = fopen($_POST['nom'] . '.txt', 'w');
        fwrite($file, $str);
        fclose($file);
    }
    else 
    {
        $result = array(
            "code" => "error",
            "message" => "Les données n'ont pas été envoyées"
        );
    }
}



