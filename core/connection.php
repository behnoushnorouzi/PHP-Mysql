<?php
try{
  $db = new PDO('mysql:host=localhost;dbname=mini-chat','root', '0000', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

}catch(EXCEPTION $e){
  echo $e->getMessage();
}
 ?>
