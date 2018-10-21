<?php
class calcul
{
    private static  $suffix = "€" ;
    public static function rec($chiffre)
    {
        return self::withzero($chiffre);
    }

    public static function withzero($chiffre)
    {
        if($chiffre <= 9)
        {
            return '0.' .$chiffre. self::$suffix;
        }
        else
        {
         return   $chiffre . self::$suffix;
        }

    }
}

?>