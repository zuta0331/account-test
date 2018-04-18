<?php

?>

<html>
 <head>
  <title>ログイン画面</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 </head>
 
 <body>
  <form action="check_account.php" method="post">
   <p>ユーザー名：<input type=text name="username"></p>
   <p>パスワード：<input type=password name="pass"></p>
   <p><a href="entry_account.php">新規登録</a>&nbsp;<input type="submit" value="ログイン"></p>
  </form>
  
 </body>
</html>