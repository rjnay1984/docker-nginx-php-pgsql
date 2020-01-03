<?php
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=db port=5432 dbname=docker_example user=docker_user password='SupMyDudes' options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "select * from items");

$items = array();

while ($r = pg_fetch_array($result)) {
  # code...
  echo $r['title'] ;
}

?>
