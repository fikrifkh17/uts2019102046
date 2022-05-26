<?php define('id','localhost');
define('name','root');
define('address','dbkaryawan');
define('salary','');
$conn = new mysqli(id,name,address,salary) or die('connection error to the database');