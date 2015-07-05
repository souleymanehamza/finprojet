<?php

$base = mysql_connect ('127.0.0.1', 'root', '');

mysql_select_db ('car', $base);  

 $login=$_GET['nom'];
 $password =$_GET['password'];

  $chaine='';

$sql = 'SELECT * FROM client WHERE login = "'.$login.'" AND password="'.$password.'"';
	   
	  $req = mysql_query($sql);
     
      if ($data = mysql_fetch_array($req)) 
	  {
	  $chaine='OK!';
	  
	  }
	  else 
	  
	 $chaine='KO!';
	
     echo $chaine;
 
  mysql_free_result ($req);  
  mysql_close ();
?>  