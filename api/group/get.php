<?php
require_once '../config/configGroup.php';

if(!empty(isset($_GET['id']))){
  $group = new Group();
  $data = $group->getGroup($_GET['id']);

  $json = json_encode($data);
  echo $json;
  return $json;
}

