<link rel="icon" type="image/png" href="image1.gif" />
<html>

<head>
    <title>Interface ComputerCraft</title>
</head>

</html>

<?php
 
function Computercraft()
{
if(isset($_POST['one']) && isset($_POST['two']) && isset($_POST['three']) && isset($_POST['four']) && isset($_POST['five']) && isset($_POST['six'])){
 $one = urldecode($_POST['one']);
 $two = urldecode($_POST['two']);
 $three = urldecode($_POST['three']);
 $four = urldecode($_POST['four']);
 $five = urldecode($_POST['five']);
 $six = urldecode($_POST['six']);
 
 
$file = fopen('data.txt', 'w+');
 fputs($file, "Nuclear Reactor: "."<br>".$one."/10000 Heat"."<br>".$two." Energy"."<br>".$three." Uranium Level"."<br>".$four." OnOff"."<br>"."MfSU: "."<br>".$five."<br>".$six."<br>");
 fclose($file);
}
else {
 $file = fopen('data.txt', 'r+');
 $data = fgets($file); 
 echo $data;
 fclose($file);
}
}
 
function write()
{
 $yo = fopen('Lancer.txt', 'r+');
 $Monbre = fgets($yo); 
 fclose($yo);
 
 $Monbre = $Monbre + 1;
 
$yolo = fopen('Lancer.txt', 'w+');
fputs($yolo, $Monbre);
 fclose($yolo);
}
function Read()
{
 $yo = fopen('Lancer.txt', 'r+');
 $Lancer = fgets($yo); 
 echo $Lancer;
 fclose($yo);
}
 
Computercraft();
//write();
//Read();
 
header('Refresh: 1');
 
?>