<?
//header("Content-type:text/html;charset=utf-8"); 
 
//echo '$_POST:<br/>'; 
//print_r($_POST); 
//echo '<hr/>'; 
 
//echo '$GLOBALS[\'HTTP_RAW_POST_DATA\']:<br/>'; 
//print_r($GLOBALS['HTTP_RAW_POST_DATA']); 
//echo '<hr/>'; 
 
//echo 'php://input:<br/>'; 
$data = file_get_contents('php://input'); 
//print_r(urldecode($data)); 
echo "urldecode = " . urldecode($data);
echo "<br>";

$headers =  getallheaders();
foreach($headers as $key=>$val){
  echo $key . ': ' . $val . '<br>';
}
echo "<br>";
echo "{'result':'successful'}";
?>