<?php
require 'config.php';
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/createAccount.css">
    <title>Create new account</title>
</head>
<body>
    
    <header>
        <div class="asa">
            <a href="mainPage.html"><img src="images/znakNews.svg" class="znak-news" alt=""></a>
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
    <h1>Create new account</h1>
    <form action="" method="post" autocomplete="off">
        <div class="avtorizatsya">
                <input class="chetyryi-avtorizatsya" name="username" id="username" placeholder="Full name*" type="text">
                <input class="chetyryi-avtorizatsya" name="email" id="email" placeholder="Email*" type="email">
                <input class="chetyryi-avtorizatsya" name="password" id="password" placeholder="New password*" type="password">
                <input class="chetyryi-avtorizatsya" name="confirmpassword" id="confirmpassword" placeholder="Confirm new password*" type="password">
                <button type="submit" name="submit" class="submit-account">Create new account</button>
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