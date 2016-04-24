<?
//$url = 'http://sonnyshih.summerhost.info/post.php';
//$data = array('key1' => 'value1', 'key2' => 'value2');

//$data = {"name": "hello", "age": 12};

// use key 'http' even if you send the request to https://...
//$options = array(
//    'http' => array(
//       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//        'method'  => 'POST',
//        //'content' => http_build_query($data),
//        'content' => $data,
//    ),
//);
//$context  = stream_context_create($options);
//$result = file_get_contents($url, false, $context);
//if ($result === FALSE) { /* Handle error */ }

//var_dump($result);

//echo $result;

// Your ID and token
$blogID = '8070105920543249955';
$authToken = 'OAuth 2.0 token here';

// The data to send to the API
$postData = array(
    'kind' => 'blogger#post',
    'blog' => array('id' => $blogID),
    'title' => 'A new post',
    'content' => 'With <b>exciting</b> content...'
);

// Create the context for the request
$context = stream_context_create(array(
    'http' => array(
        // http://www.php.net/manual/en/context.http.php
        'method' => 'POST',
        'header' => "Authorization: {$authToken}\r\n".
            "Content-Type: application/json\r\n".
            "Device: android\r\n",
        'content' => json_encode($postData)
    )
));

// Send the request
// $response = file_get_contents('http://sonnyshih.summerhost.info/post.php', FALSE, $context);
$response = file_get_contents('http://localhost/myproject/HeadDemo/PostDemo/post.php', FALSE, $context);

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