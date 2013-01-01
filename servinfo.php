<?php

$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
$username = $mysql_config["username"];
$password = $mysql_config["password"];
$hostname = $mysql_config["hostname"];
$port = $mysql_config["port"];
$db = $mysql_config["name"];
?>
<ul>
  <li><?php echo "hostname: $hostname"; ?></li>
  <li><?php echo "port: $port"; ?></li>
  <li><?php echo "db: $db"; ?></li>
</ul>
