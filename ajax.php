<?php 

if($_POST['Submit']){
	$response=array(
		'res'=>'Purchase Successful!'
	);
}else{
	$response=array(
		'res'=>'Purchase Failed!'
	);
}

echo json_encode($response);









 ?>