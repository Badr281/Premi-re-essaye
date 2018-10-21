<?php
class Bootstrappform extends form
{   
 public function surround($html)
{
return "<div align = 'left|right|center|justify'  class = \"form-group\"  > {$html}  </div> " ;
}
    public  function input($nom)
{
return $this->surround('<label>'.$nom.'</label><input type = "text" name="'.$nom.'" value = "'.$this->getVal($nom).'" class = "form-control" /></label>');

}

public function submit()
{
return '<div align="center" ><button type = "submit" class="btn btn-primary" class =\"form-group\"  >envoyer</button></div> ';
}
}
?>