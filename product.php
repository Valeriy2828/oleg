<?php
 ///store/product/create?id=5
$name = $_SERVER['SCRIPT_NAME']; // получаем - /store/product/create
$queri = $_SERVER['QUERY_STRING'];// то что после ?
        
$name_array =  explode('/', $name);   // строку в массив с помощью разделителя  ['store', 'product', 'create']

$module = ucfirst($name_array[0]);    // получаем первый элемент массива с большой буквы 'Store'
$controller = ucfirst($name_array[1]);   //  тоже самое 'Product'
$method = $name_array[2];  // получаем метод 'create'

$Fullcontroller = '\\'.$module.'\\'.$controller.'Controller'.'?'.$queri; 

$obj = new $Fullcontroller(); 

$obj->$method($queri);
