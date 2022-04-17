<?php
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($uri == '/' and $method == 'GET') {
  $headers = getallheaders();

  $SynUserIdentifier = $headers['Syn-User-Identifier'];
  if (isset($SynUserIdentifier)) {
    echo $SynUserIdentifier
  };
};
?>
