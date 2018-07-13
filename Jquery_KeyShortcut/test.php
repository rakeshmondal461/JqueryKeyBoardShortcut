<?
$data="Name@@address@@cont@@email";
$temp = explode("@@", $data);
?>
Name :<?=$temp[0];?><br>
address :<?=$temp[1];?><br>
Cont :<?=$temp[2];?><br>
E-mail :<?=$temp[3];?><br>