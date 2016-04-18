<!DOCTYPE html>
<html>
   <head>
      
   </head>
   <body>            
      <form style="border:1px solid black; width:300px; padding:0 0 30px 30px" action="index.php" method="post">
         <h1>Login</h1>
         <span>E-Mail:</span>
         <input name="email" type="text"><br><br>
         <span>Password:</span>
         <input name="password" type="password"><br><br>
         <button type="submit">Login</button>
         <input hidden name="type" value="login">
      </form>
      <br>
      <form style="border:1px solid black; width:300px; padding:0 0 30px 30px" action="index.php" method="post">
         <h1>Register</h1>
         <span>Name:</span>
         <input name="name" type="text"><br><br>
         <span>E-Mail:</span>
         <input name="email" type="text"><br><br>
         <span>Password:</span>
         <input name="password" type="password"><br><br>
         <button type="submit">Register</button>
         <input hidden name="type" value="register">
      </form>
</body>
</html>