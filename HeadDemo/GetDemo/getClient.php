<?
// Your ID and token
$blogID = '8070105920543249955';
$authToken = 'OAuth 2.0 token here';

// Create the context for the request
$context = stream_context_create ( array (
		'http' => array (
				// http://www.php.net/manual/en/context.http.php
				'method' => 'POST',
				'header' => "Authorization: {$authToken}\r\n" . 
							"Content-Type: application/json\r\n" . 
							"Device: android\r\n" 
		) 
) );


// Send the request
// $response = file_get_contents('http://sonnyshih.summerhost.info/post.php', FALSE, $context);
$response = file_get_contents('http://localhost/myproject/HeadDemo/GetDemo/get.php?name=hello&price=123', FALSE, $context);

// Check for errors
if($response === FALSE){
	die('Error');
}

echo "response = " . $response . " #####";
echo "<br>";

// Decode the response
$responseData = json_decode($response, TRUE);

// Print the date from the response
echo $responseData['published'];

?>