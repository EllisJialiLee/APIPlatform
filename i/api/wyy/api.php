<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>

<?php
//网易云音乐直链解析
//使用方法
// www.ni-co.cn/api/wyy.php?id=网易云歌曲ID
$id = $_GET['id'];
$wyy = 'http://music.163.com/song/media/outer/url?id=';
header('Location:'.$wyy . $id . ".mp3");
?>