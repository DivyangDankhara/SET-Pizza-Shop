<?php
/*<!--
*	 FILE          : price-Cal.php
*    PROJECT       : Final Exam WDD
*	 PROGRAMMER    : Divyangbhai Dankhara
*    STUDENET NO.  : 8061566
*	 FIRST VERSION : 2018-12-14
*	 Description   : This is the php  server which will give total price of the selected items
-->*/

$doubleChease = $_REQUEST["Chease"];
$HowManyTopping = $_REQUEST["topping"];
$base = $_REQUEST["base"];
$return = array();

if($HowManyTopping != "")
{
    $HowManyTopping = (int)$HowManyTopping;
    $total += $HowManyTopping * 1;
}

if($doubleChease != "")
{
    $doubleChease = (int)$doubleChease;
    $total += $doubleChease * 1.5;
}

$total += 10;
$myObj->total = $total;
$afterTax = ($total * 1.13);
$myObj->afterTax = $total;
$myJSON = json_encode($myObj);
echo $total;
?>