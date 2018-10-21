<?php

/**
 * is created for present simple form by method post with note about function
 */
class form
{
/**
     * @var array donnés récupérer par le formulaire 
     */
public $data;

/**
 * @var string tag pour encader l'input
 */
public   $tag = 'p';
/**
 * @param array $data  les donnés récupérer au formulaire  
 */


public function __construct($data= array())
{
$this->data = $data;


}
/**
 * @param string $html  le code html entourer
 * @return string 
 */

public function surround($html)
{
return "<{$this->tag}> {$html}  </{$this->tag}> " ;
}
/**
 * @param string $index l'index de la fornction (username ou password)
 * @return string
 */ 
public function getVal($index)
{
return isset($this->data[$index]) ? $this->data[$index] : null;
}
/**
 * @param string $nom
 * @return string 
 */
public  function input($nom)
{
return $this->surround('<input type = "text" name="'.$nom.'" value = "'.$this->getVal($nom).'" />');

}
/**
 * @return string 
 */

public function submit()
{
return $this->surround('<button type = "submit">envoyer</button>');
}



}


?>