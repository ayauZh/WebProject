<?php
require 'config.php';
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      echo
      "<script> alert('login Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signIn.css">
    <title>Sign in</title>
</head>
<body>
    <header>
        <div class="asa">
            <img src="images/znakNews.svg" class="znak-news" alt="">
            <a href="about.html"><div class="zagolovok-slovo">About</div></a>
            <a href="channel.html"><div class="zagolovok-slovo-1">Channels</div></a>
        
        
            <div class="container">
                <form action="" class="search-bar">
                    <input type="text" placeholder="search anything" name="q">
                    <button type="submit"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjIyIiBoZWlnaHQ9IjIyIj48cGF0aCBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik05Ljc4NyAwYzUuNDA1IDAgOS43ODcgNC4zMDIgOS43ODcgOS42MDlhOS40NTQgOS40NTQgMCAwMS0xLjk4MiA1Ljc5OGwzLjkzIDMuODZjLjYyNi42MTMuNjM1IDEuNjE4LjAyIDIuMjQzbC0uMDIuMDJhMS42NDYgMS42NDYgMCAwMS0yLjMwNyAwbC00LTMuOTI1YTkuODcgOS44NyAwIDAxLTUuNDI4IDEuNjEzQzQuMzgyIDE5LjIxOCAwIDE0LjkxNiAwIDkuNjA4IDAgNC4zMDMgNC4zODIgMCA5Ljc4NyAwem0wIDIuNDAyYy00LjA1NCAwLTcuMzQgMy4yMjctNy4zNCA3LjIwN3MzLjI4NiA3LjIwNiA3LjM0IDcuMjA2IDcuMzQtMy4yMjYgNy4zNC03LjIwNmMwLTMuOTgtMy4yODYtNy4yMDctNy4zNC03LjIwN3oiLz48L3N2Zz4K" alt=""></button>
                </form>
            </div>
            <img src="images/menu.png" alt="" class="menu_znak">

        </div>   
        
    </header>
    <!----------------------------------------------------------------------------------------->
    <div id="div-pod-zogolovok"></div>
    <h1>Login</h1>
    <form action="" method="post" autocomplete="off">
            <div class="avtorizatsya">
                <input class="email-i-password" placeholder="Email*" type="email" name="email" id="email">
                <input class="email-i-password" placeholder="Password*" type="password" name="password" id="password">
                <a href="" class="forgot-password">Forgot password</a>
                <input type="submit" name="submit" class="submit-account" value="Login">
                <h3>Don’t have an account yet?</h3>
                <a href="createAccount.html" class="knopka-create-account"><div>Create account</div></a>
            </div>
    </form>
    <!-------------------------------------footer----------------------------------------------->
    <footer>
        <div style="display: flex">
            <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="" class="sotsyalnaya-set"></a>
            <a href="https://www.instagram.com/"><img src="images/instagram.png" alt="" class="sotsyalnaya-set"></a>
            <a href="https://www.youtube.com/"><img src="images/youtube.png" alt="" class="sotsyalnaya-set"></a>
            <a href="https://ru.linkedin.com/"><img src="images/linkedin.svg" alt="" class="sotsyalnaya-set"></a>
            <div class="footer-text">
                <a href="about.html"><p>About</p></a>
                <a href="signIn.html"><p>Sign in</p></a>
                <a href="createAccount.html"><p>Create account</p></a>
            </div>
        </div>
        <div style="display: flex" class="nizhnaya-chast-footer">
            <img src="https://www.beautifulnews.com/themes/custom/beautiful_news/images/branding/bn-brand-logo-gs.svg" alt="">
            <img src="images/googleassistant.svg" alt="" id="google-assistant" class="google-assistant-appstore">
            <img src="images/appstore.svg" alt="" class="google-assistant-appstore">
        </div>
    </footer>
</body>
</html>