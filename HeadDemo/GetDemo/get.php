<?

//echo 'php://input:<br/>';
$data = file_get_contents('php://input');
//print_r(urldecode($data));
echo "urldecode = " . urldecode($data);
echo "<br>";

$headers =  getallheaders();
foreach($headers as $key=>$val){
	echo $key . ': ' . $val . '<br>';
}

echo $_GET["name"] . " ddddd<br>";
echo $_GET["price"] . " bbbbb<br>";;
echo "<br>";
echo var_dump($_GET);
echo "{'result':'successful123'}";
?>