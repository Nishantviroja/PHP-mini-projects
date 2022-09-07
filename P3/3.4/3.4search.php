<?php

    $frameworks = array("CodeIgniter","Zend Framework","Cake PHP","Kohana");
    $name = $_GET["name"];
    if (strlen($name) > 0)
    {
        $match = "";
        for ($i = 0; $i < count($frameworks); $i++) 
        {
            if (strtolower($name) == strtolower(substr($frameworks[$i], 0, strlen($name)))) 
            {
                if ($match == "")
                {
                    $match = $frameworks[$i];
                } 
                else 
                {
                    $match = $match . " , " . $frameworks[$i];
                }
            }
        }
    }

    echo ($match == "") ? 'No match found' : $match;

?>