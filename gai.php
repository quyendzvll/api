<?php
/*
*/
function kaneki($ww) {
mt_srand( (double)microtime() * 1000000000000000000 );
$stt = array_rand($ww);
return $ww[$stt];
}
function jukiee($path) {
$images = array();
if ( $img_ww = @opendir($path) ) {
while ( false !== ($img_www = readdir($img_ww)) ) {
if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_www) ) {
$images[] = $img_www;
}
}
closedir($img_ww);
}
return $images;
}
$root = '';
$path = 'gai/'; //tên thư mục chứa ảnh
$list = jukiee($root . $path);
$link = 'https://apiquyenkaneki.tk/';  //thay link relp/domain vào
$img = kaneki($list);
$duma = 0;
$countfiles = glob($path . "*.{jpg,png,gif}",GLOB_BRACE);
if ($countfiles){
$duma = count($countfiles);
}
$api1 = array(
"data" => $link . $path . $img,
"status" => "success",
"count" => $duma,
"author" => "Kaneki",
"Image source" => "Kaneki",

);
$rdimg = json_encode($api1, JSON_UNESCAPED_SLASHES);
print($rdimg); 
?>
