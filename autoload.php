<?php

function load($classe)
{
    $ext = '.php';
    $path = $classe . $ext;
    if (file_exists($path)) {
        require $path;
    } else {
        $path = 'model/' . $classe . $ext;
        if (file_exists($path)) {
            require $path;
        } else {
            $path = 'Controller / ' . $classe . $ext;
            if (file_exists($path)) {
                require $path;
            } else {
                $path = '../model/' . $classe . $ext;
                if (file_exists($path)) {
                    require $path;
                } else {
                    $path = '../Controller / ' . $classe . $ext;
                    if (file_exists($path)) {
                        require $path;
                    }
                }
            }
        }
    }
}

spl_autoload_register('load');