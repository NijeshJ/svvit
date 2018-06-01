<?php 
include_once("db.php");
$getCourse=$_REQUEST['getCourse'];$getbranch=$_REQUEST['getbranch'];
$op="<option>Select</option>";
foreach($list_branch[$getCourse] as $key=>$value)
{
	if($key==$getbranch)$sel="selected";else $sel="";
	$op.="<option $sel value='$key'>$value</option>";
}
echo $op;
//echo '<select>'.$op.'</select>';
?>