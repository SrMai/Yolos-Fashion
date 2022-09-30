<html>
 <body>
  <head>
   <title>
     run
   </title>
  </head>

   <form method="post">

    <input type="submit" value="GO" name="GO">
   </form>
 </body>
</html>

<?php
    if(isset($_POST['GO']))
    {
      exec('ls');
      
      shell_exec("python /opt/lampp/htdocs/Yolos-Fashion/test.py");
        echo"success";
        exec("ls");
    }
?>
