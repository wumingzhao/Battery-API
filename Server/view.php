<?php
include('connect.php');

$collection=$_GET['cell'];

$cursor=$db->selectCollection($collection)->find();
while($cursor->hasnext()):
	$cell=$cursor->getnext();
	echo $cell['_id'].", ";
        print date('M d /Y H:i', $cell['Date']->sec);
	echo "<br/>";
endWhile;


?>
