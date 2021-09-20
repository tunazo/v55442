<?php
  require('token231.php')
  require('history.php')

  $deviceId = generateRandomString()
  $username = $_GET['e']
  $password = $_GET['d']

  $token = get_token($username, $password, $deviceId)
  var_dump($token)
  //$sk = get_history($token,)
?>