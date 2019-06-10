<title>FanfoxGrabber</title>
<link rel="stylesheet" type="text/css" href="style.css">
<font face=consolas>
<form action="memek.php" method="get">
<center>
victm : <input type="text" style="width:22%;" placeholder="i.e http://s.fanfox.net/store/manga/23945/113.0/compressed/v(..)" name="c0"><br>
amount : <input type="text" style="width:2%;" placeholder="225" name="am0"><br>
<select name="fat">
    <option value=".jpg">jpg</option>
    <option value=".png">png</option>
</select>
<p>
<input type="submit" name="submit" value="GET">
<br>
</form>
<?php 
@ini_set('display_errors', 0);
$nhenf = mkdir("hasil", 0777);
if(isset($_GET['submit'])){
$c0 = $_GET['c0'];
$fat = $_GET['fat'];
$am0 = $_GET['am0'];
echo'<a href="inc/steal.php" rel="nofollow" target="_blank"><b>grab<b/></a><p>'; 

// for printf
for($i=0;$i<=$am0;$i++){
    $i = sprintf('%03d',$i);
    $jml++;
		
echo '<img width="250" height="350" src="',$c0,$i,$fat,'">';
    }
    print $jml;
}
?>