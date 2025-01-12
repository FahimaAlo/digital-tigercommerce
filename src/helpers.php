<?php
if (!function_exists('settings')) {
    function settings()
    {
       $root = "http://localhost/digital-tigercommerce/"; //http://192.168.54.81/POLY/Batch01/Class20-17-92024Project/tigercommerce/";
        return [
            'root'  => $root,
            'companyname'=> 'Gold Digger Enterprise',
            'logo'=>$root."assets/img/logo.png",
            'homepage'=> $root,
            'adminpage'=>$root.'admin/',
            'vendorpage'=>$root.'shop/',
            'hostname'=> 'localhost',
            'user'=> 'root',
            'password'=> '',
            'database'=> 'tigercommerce',
            'uploadpath' => 'C:\xampp\htdocs\digital-tigercommerce\uploads\vendor\products',
        ];
    }
}
if (!function_exists('testfunc')) {
    function testfunc()
    {
        return "<h3>testing common functions</h3>";
    }
}
if (!function_exists('config')) {
    function config($param)
    {        
      $parts = explode(".",$param);
      $inc = include(__DIR__."/../config/".$parts[0].".php");
      return $inc[$parts[1]];
    }
}

//isAjax
if (!function_exists('isAjax')) {
    function isAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }
}
