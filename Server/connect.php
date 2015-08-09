<?php 

$user=$_GET['user'];
$pwd=$_GET['pwd'];
$dbname='Battery';
$connection_string = sprintf('mongodb://%s:%d/%s','127.0.0.1','27017','Battery');
try{
	if(!class_exists('Mongo'))
	{
		echo("The MongoDB PECL extension has not been installed or enabled");
	}
	
	$connection=new \MongoClient($connection_string,array('username'=>$user,'password'=>$pwd));
        $db= $connection->selectDB($dbname);
        echo "sucessfully connect!";
}catch(Exception $e){
 echo "wrong";
}

?>
