<?php
$host = "mysql626.db.sakura.ne.jp";
$user = "zuta";
$pass = "fragment15315";
$db   = "zuta_sample";

$param = "mysql:dbname=".$db.";host=".$host;
$pdo = new PDO($param, $user, $pass);
$pdo->query('SET NAMES utf8_general_ci');

$entry_user = $_POST["new_user"];
$entry_pass = $_POST["new_pass"];
$entry_pass_r = $_POST["new_pass_r"];

if($entry_pass != $entry_pass_r)
{
    echo <<<EOT
<html>
 <head></head>
 <body>
  <a href="entry_account.php">パスワードを間違えています。入力し直して下さい。</a>
 </body
</html>
EOT;
} else if($entry_pass != NULL){
    $stmt = $pdo->prepare("INSERT INTO accounttest(name, password) value(:DB_user, :DB_pass)");
    $stmt->bindValue(':DB_user', $entry_user);
    $stmt->bindValue(':DB_pass', $entry_pass);
    $stmt->execute();
    
    unset($pdo);
    header("Location: rogin_form.php");
    exit;
} else {
    echo <<<EOT
<html>
 <head></head>
 <body>
  <a href="entry_account.php">パスワードが空欄です。入力し直して下さい。</a>
 </body
</html>
EOT;
}
?>