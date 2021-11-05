<?setcookie("name",$_POST['input']);
if ($_POST['input']) {
echo  "Your name: ".$_POST['input']."<br>";
echo  "Your sex: ".$_SERVER["HTTP_USER_AGENT"]."<br>";
echo "Your IP: ".$_SERVER["REMOTE_ADDR"]."<br>"."-_-"; 
}?>