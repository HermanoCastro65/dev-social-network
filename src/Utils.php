<?php

namespace src;

class Utils
{
    public static function redirect($url)
    {
        echo '<script>window.location.href="' . $url . '"</script>';
        die();
    }

    public static function alert($mesage)
    {
        echo '<script>alert("' . $mesage . '")</script>';
    }

    public static function alertAndRedirect($mesage, $url)
    {
        Utils::alert($mesage);
        Utils::redirect($url);
    }
}
