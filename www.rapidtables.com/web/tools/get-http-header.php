<?php
//$url = "http://www.yahoo.com";
//$url = clean_string(_POST['data']);
$url = $_POST['data'];
//echo $url;
//return;
$headers = get_headers($url);
$code = $headers[0];
//echo '<p>Code = '.$code.'</p>';
for($i=0; $i<12; $i++)
{
	if( isset($headers[$i]) ) {
		if( $headers[$i]==='' )
			break;
		echo $headers[$i]."\n";
	}
	else
		break;
}

function clean_string($str) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	$str = str_replace($bad,"",$str);
	$str = trim($str);
	$str = stripslashes($str);
	$str = htmlspecialchars($str);
	return $str;
}
?>
