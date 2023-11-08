<?php
    function isEmpty($var)
    {
        return empty(trim($var));
    }
    function isOnlyText($var)
    {
        return preg_match('/^([a-zA-ZÁÉÍÓÚÑáéíóúñ]+)$/',$var);
    }

    function isText($var)
    {
        return preg_match('/^([0-9a-zA-ZÁÉÍÓÚÑáéíóúñ._-])+$/',$var);
    }

    function isAllowedLenght($var)
    {
        return preg_match('/^[a-zA-Z0-9\&\%\$\#\+\*\(\)]{8,40}$/',$var);
    }

    function isValidPassword($var)
    {
        return preg_match('/^[a-zA-Z0-9\&\%\$\#\+\*\(\)]{8,40}$/',$var);
    }

    function isMail($var)
    {
        return filter_var($var,FILTER_VALIDATE_EMAIL);
    }
?>