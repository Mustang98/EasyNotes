<!DOCTYPE html>
<html>
   <head>
      <meta charset='utf-8'>
      <style>
         div{
            width:300px;
            display:inline-block;
            border:1px solid black;
            margin:15px;
            padding:0 5px;
            vertical-align:top;
         }
      </style>
   </head>
   <body>            

<?php 
   function cmp($a, $b)
   {
      return $a[lastUpd]<$b[lastUpd];
   }
   
   $info = getUserInfo();
   echo "<h1>Hello, ".$info['name']."</h1>";
   $notes = $info['notes'];
   $notes.uasort($notes, 'cmp');
   foreach($notes as $n)
   {
      echo "<div id='id$n[id]'>";
      echo "<h2>$n[title]</h2>";
      echo "<p>$n[text]</p>";
      echo "<p>Дата создания: ".date('Y-m-d H:i',$n[created]+0)."</p>";
      echo "<p>Последнее изменение: ".date('Y-m-d H:i',$n[lastUpd]+0)."</p>";
      echo "</div>";
   }
?>
   
      <form action="index.php" method="post">
         <input hidden name="type" value="logout">
         <button type="submit">Logout</button>
      </form>
   </body>
</html>