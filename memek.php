<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="inc/rain.js"></script>
<font face=consolas>
<center>
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