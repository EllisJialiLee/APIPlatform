<?php
if(isset($_GET['id']) && $_GET['id']!=''){
  $musicId = $_GET['id'];
  $url = "http://music.163.com/api/song/detail/?id={$musicId}&ids=%5B{$musicId}%5D&csrf_token=";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_POST, 0);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  $output = curl_exec($ch);
  curl_close($ch);
  $musicArr = json_decode($output);
  //print_r($musicArr);
  $musicJson['name'] = $musicArr->songs[0]->name;//专辑
  $musicJson['url'] = $musicArr->songs[0]->mp3Url; //音乐链接
  $musicJson['pic'] = $musicArr->songs[0]->album->picUrl;//音乐封面
  $musicJson['singer'] = $musicArr->songs[0]->album->artists[0]->name;//歌手
  $musicJson['album'] = $musicArr->songs[0]->album->name;//专辑
  echo json_encode($musicJson);
};
?>