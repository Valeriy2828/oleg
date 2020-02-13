<?php
$url = $_SERVER['REQUEST_URI']; // получаем имя запроса в виде строки  - /user/auth/create_token
        
$url_array =  explode('/', $url);   // строку в массив с помощью разделителя  ['user', 'auth', 'create_token']

$module = ucfirst($url_array[0]);    // получаем первый элемент массива с большой буквы 'User'
$controller = ucfirst($url_array[1]);   //  тоже самое 'Auth'
$method = $url_array[2];  // получаем метод 'create_token'

$Fullcontroller = '\\'.$module.'\\'.$controller.'Controller';   // получаем '\User\AuthController'

$obj = new $Fullcontroller();  // new \User\AuthController();

$obj->$method();   //  $contr_obj->create_token()

