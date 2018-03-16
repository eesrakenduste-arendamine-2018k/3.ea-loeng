<?php

// READ GET save.php?latest=true
if (isset($_GET['latest'])){
 echo file_get_contents('db.txt');
}

// WRITE POST save.php 
// body sees json
if (isset($_POST['json'])){
  if(file_put_contents('db.txt', $_POST['json'])){
    $o =   json_decode($_POST['json']);
    echo $o->text.' salvestati';
  }
}

?>