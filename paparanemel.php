<?php

if(!defined('OSTSCPINC') || !@$thisuser->isStaff()) die('Access Denied');
?>

<style>
    
    .button3 {
	
	background-color:#89c403;
	-moz-border-radius:11px;
	-webkit-border-radius:11px;
	border-radius:11px;
	border:1px solid #74b807;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:10px 24px;
	text-decoration:none;
}
.button3:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
	background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
	background-color:#77a809;
}
.button3:active {
	position:relative;
	top:1px;
}


.button4 {
	
	background-color:#7892c2;
	-moz-border-radius:11px;
	-webkit-border-radius:11px;
	border-radius:11px;
	border:1px solid #7892c2;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:10px 24px;
	text-decoration:none;
}

    
    
</style>

<?php

$id = $_GET['id'];

$sql = "SELECT * FROM `email` WHERE `ID` = '$id'";
$qid = mysql_query($sql);
$data = mysql_fetch_array($qid)''

echo $data['Body'];
?>





<?require(CLIENTINC_DIR.'footer.inc.php'); ?>
