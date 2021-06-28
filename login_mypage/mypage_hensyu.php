<?php
mb_internal_encoding("utf8");
session_start();
//mypage.phpからの導線以外(mypage.phpからpost通信で乱数を取得できない場合)は、login_error.phpへリダイレクト
if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja"> 
    <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

    <body>

        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>

        <main>
            <div class="box">
                <h2>会員情報</h2>
                <div class="hello">
                    <?php echo "こんにちは！ ".$_SESSION['name']."さん";?>
                </div>

                <form action="mypage_update.php" method="POST">
                    <div class="profile_pic">
                        <img src="<?php echo $_SESSION['picture'];?>">
                    </div>
                    
                    <div class="basic_info">
                        <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name'];?>" name="name">
                        </p>
                        <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail">
                        </p>
                        <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password'];?>" name="password">
                        </p>
                    </div>
                    <div class="comments">
                        <textarea rows="5" cols="80" name="comments"><?php echo $_SESSION['comments'];?></textarea>
                    </div>
                
                    <div class="hensyubutton">
                        <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                    </div>
                </form>

            </div>
        </main>

        <footer>
        ©2018 InterNous.inc.All rights reserved
        </footer>
    </body>
</html>
