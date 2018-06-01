<?php
//$mysqli = new mysqli("localhost", "root", "", "vvit");
$mysqli = new mysqli("localhost", "svvitor3_svvitor", "Svvit*sd", "svvitor3_vvit");

if ($mysqli->connect_errno) {

    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

function insert($mysqli,$table,$data)

{

	$fields_name="";$fields_value="";

	foreach($data as $key=>$value)

	{

	$fields_name.="`$key`,"	;

	$fields_value.="'$value',";

	}

	$fields_name=rtrim($fields_name,",");

	$fields_value=rtrim($fields_value,",");

	//echo "INSERT INTO `$table` ($fields_name)  VALUES ($fields_value)";

	$mysqli->query("INSERT INTO `$table` ($fields_name)  VALUES ($fields_value)");

}

function delete($mysqli,$table,$where)

{

	$res = $mysqli->query("DELETE FROM $table WHERE $where");

	return $res;

}



function update($mysqli,$table,$data,$where)

{

	$fields_name="";$fields_value="";

	foreach($data as $key=>$value)

	{

	$fields_name.="`$key`='$value',"	;

	}

	$fields_name=rtrim($fields_name,",");

	//echo "UPDATE $table SET $fields_name WHERE $where";

	$res = $mysqli->query("UPDATE $table SET $fields_name WHERE $where");

	return $res;

}

$list_gender=array("1"=>"Male","2"=>"Female");

$list_standerd=array("1"=>"10th/SSLC","2"=>"12th/PUC","3"=>"B.E.");

$list_course=array("1"=>"Diploma","2"=>"B.E.","3"=>"M.TECH.");

$list_branch[1]=array("1"=>"Civil Engineering","2"=>"Mechanical Engineering");

$list_branch[2]=array("1"=>"Civil Engineering","2"=>"Computer Science and Engineering","3"=>"Electronics and Communication Engineering","4"=>"Mechanical Engineering");

$list_branch[3]=array("1"=>"Construction Technology","2"=>"Machine Design","3"=>"Structural Engineering","4"=>"Computer Integrated Manufacturing","5"=>"Signal Processing","6"=>"Computer Science and Networking","7"=>"VLSI and Embedded System Design");

?>