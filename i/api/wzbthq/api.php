<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
 
<?php
$url=$_GET["url"];
if ($url==""){
	return_json("20011","no","need url");
}
else{
		return_json("10001","ok",website_title($url));
}
function return_json($code,$msg,$title){
$result = array(
          'code'=>$code,
          'msg'=>$msg,
          'title'=>$title,
        );
echo stripslashes(json_encode($result,JSON_UNESCAPED_UNICODE));
}
function website_title($url){
    $url_c=trim("http://".$url);
    $data=file_get_contents($url_c);
    preg_match('|<title>(.*?)<\/title>|i',$data,$m);
	return $m[1];
}
?>