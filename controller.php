<?php
checkRequest();
checkSession();

function checkRequest()
{
   switch ($_POST['type']) {
      case "login": login(); break;
      case "register": register(); break;
      case "logout": closeSession(); break;
   }   
}

function checkSession()
{
   if ($_SESSION[email]==null) loadLogin();
   else loadMain();
}

function closeSession()
{
   unset($_SESSION[email]);
   session_destroy();
}

function register()
{
   $user = new User($_POST['email'], $_POST['password'], $_POST['name']);
   $answer = createUser($user);
   if ($answer == "OK") echo "<p> Registration OK. Use Login to open your account</p>";
   else echo "<p>Registration failed. ".$answer."</p>";
}

function login()
{
   //проверяем checkLogin(), если ОК, то $_SESSION[email] = email, на фронт-енд перезагружаем   
   $user = new User($_POST['email'], $_POST['password']);
   $answer = checkLogin($user);
   if ($answer == "OK") $_SESSION[email]=$_POST['email'];
   else echo "<p> Login failed. ".$answer."</p>";
}

?>
