<?php
$host = "mysql626.db.sakura.ne.jp";
$user = "zuta";
$pass = "fragment15315";
$db   = "zuta_sample";

$param = "mysql:dbname=".$db.";host=".$host;
$pdo = new PDO($param, $user, $pass);
$pdo->query('SET NAMES utf8_general_ci');

$rogin_name = $_POST["username"];
$rogin_pass = $_POST["pass"];

$stmt = $pdo->prepare('SELECT * FROM accounttest WHERE name=:DB_name AND password=:DB_pass');
$stmt->bindValue(':DB_name', $rogin_name);
$stmt->bindValue(':DB_pass', $rogin_pass);
$stmt->execute();

$row = $stmt->fetch();
if($rogin_name = $row['name'] AND $rogin_pass = $row['password'])
{
    echo "アカウントは存在します";
} else 
{
    echo <<<EOT
<html>
 <head></head>
 <body>
  このアカウントは存在しません。<br>
  <a href="rogin_form.php">戻る</a>
 </body>
</html>

EOT;
}
?>