<?php


function autoload($class){
    require 'entidad/'.$class.'.php';
}
spl_autoload_register('autoload');

$obj = new user();
echo info::getInfo();

echo $obj->saludar();

?>