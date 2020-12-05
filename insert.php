<?php
	$kodesepeda = $_POST['kodesepeda'];
	$merksepeda = $_POST['merksepeda'];
	$hargasepeda = $_POST['hargasepeda'];
	$jenissepeda = $_POST['jenissepeda'];
	//$gambarsepeda = $_POST['gambarsepeda'];
	$con = mysqli_connect("localhost","root","","apispd");
	$sql = "insert into tbadddata (kodesepeda , merksepeda, hargasepeda, jenissepeda) values ('$kodesepeda' , '$merksepeda' , '$hargasepeda' , '$jenissepeda' )";
	$json["hasil"]=array();
	//$result = mysqli_query($con,$sql);
	//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$count = mysqli_num_rows($result);
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
	//echo $sql;
?>