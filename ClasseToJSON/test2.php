<?
include('test.php');

class Result extends Error {
	public $body;
}

class Product {
	public $name;
	public $price;
}


$result = new Result();

$result->errorName = "good";
$result->errorCode = "1001";
$result->errorMSG = "hello";

$result->list = array (
		array (
				"1",
				"2",
				"3"
		),
		"b",
		"c"
);

for($i = 0; $i < 10; $i ++) {
	$address = new Address ();
	$address->name = "name ".$i;
	$address->address = "address ".$i;

	$result->addressList[$i] = $address;
}

for ($i=0;$i<10;$i++){
	$product = new Product();
	
	$product->name = "product ".$i;
	$product->price = "price ". $i;
	
	$result->body[$i] = $product;
}

echo json_encode ( get_object_vars ( $result ) );
echo "<br><br>";
?>