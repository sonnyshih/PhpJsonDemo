<?
class Error {
	public $errorName;
	public $errorCode;
	public $errorMSG;
	public $list;
	public $addressList;
	
// 	public function __construct($ErrorName, $ErrorCode, $ErrorMSG) {
// 		$this->errorName = $ErrorName;
// 		$this->errorCode = $ErrorCode;
// 		$this->errorMSG = $ErrorMSG;
// 	}
	// public function getCode() {
	// return $this->code;
	// }
	// public function getName() {
	// return $this->name;
	// }
	// public function getMsg() {
	// return $this->msg;
	// }
	public function toJSON() {
		return json_encode ( $this );
	}
}
class Address {
	public $name;
	public $address;
}

// $error = new Error ( "the content of var", "1001", "hello" );
$error = new Error();
$error->errorName = "good";
$error->errorCode = "1001";
$error->errorMSG = "hello";
$error->list = array (
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
	
	$error->addressList[$i] = $address;
}

echo json_encode ( get_object_vars ( $error ) );
echo "<br><br>";
// echo json_encode ( $error->toJSON () );

?>