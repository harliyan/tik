<?php
$url = 'https://pekalongankota.go.id/';
$ch = curl_init($url);
// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$httptime = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
curl_close($ch);
if($httpcode>=200 && $httpcode<300){
  echo "up" . $httptime;
} else {
  echo "down";
}
?>

<br>

<?php
$url = 'https://telecenter.pekalongankota.go.id/';
$ch = curl_init($url);
// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$httptime = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
curl_close($ch);
if($httpcode>=200 && $httpcode<300){
  echo "up" . $httptime;
} else {
  echo "down";
}
?>

<br>

<?php
$url = 'https://siapkawal.pekalongankota.go.id/';
$ch = curl_init($url);
// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$httptime = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
curl_close($ch);
if($httpcode>=200 && $httpcode<300){
  echo "up" . $httptime;
} else {
  echo "down";
}
?>

<br>

<?php
$url = 'http://baznas.batangkab.co.id/';
$ch = curl_init($url);
// curl_setopt($ch, CURLOPT_TIMEOUT, 5);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$httptime = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
curl_close($ch);
if($httpcode>=200 && $httpcode<300){
  echo "up" . $httptime;
} else {
  echo "down" . $httptime;
}
?>