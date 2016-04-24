<?
$json = "{\"errorName\":\"good\",\"errorCode\":\"1001\",\"errorMSG\":\"hello\",\"list\":[[\"1\",\"2\",\"3\"],\"b\",\"c\"],\"addressList\":[{\"name\":\"name 0\",\"address\":\"address 0\"},{\"name\":\"name 1\",\"address\":\"address 1\"},{\"name\":\"name 2\",\"address\":\"address 2\"},{\"name\":\"name 3\",\"address\":\"address 3\"},{\"name\":\"name 4\",\"address\":\"address 4\"},{\"name\":\"name 5\",\"address\":\"address 5\"},{\"name\":\"name 6\",\"address\":\"address 6\"},{\"name\":\"name 7\",\"address\":\"address 7\"},{\"name\":\"name 8\",\"address\":\"address 8\"},{\"name\":\"name 9\",\"address\":\"address 9\"}]}";

$obj = json_decode($json);
echo $obj->{"errorName"};

echo "<br>";

echo $obj->{"list"}[0][1];

echo "<br>";

echo $obj->{"addressList"}[1]->{"address"};

echo "<br>";

echo $obj->{"addressList"}[3]->{"name"};

?>
