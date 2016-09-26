<?php
$string =$_GET["num1"];
for($i = 0; $i != strlen($string); $i++)
{
     $asciiString .=ord($string[$i]).";";
     $asciiString1 +=ord($string[$i]);
}
$asciiCode1 = str_replace("&", "&amp;", $asciiString1);
echo json_encode($asciiString1);
?>
