<?php
function getInput($inputName)
{
    global $invalid;
    
    if (isset($_POST[$inputName]) && !empty($_POST[$inputName]) && !$_POST[$inputName] == "")
    {
        $invalid = false;
        return $_POST[$inputName];
    }
    else
    {
        $invalid = true;
    }
}
?>