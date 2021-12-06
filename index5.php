<?php
	include "db.php"
	session_start
?>





<!DOCTYPE html>
<html>
    <head>
    	<title>School management system</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body> class="back"
        <?php include"navbar.php";?>
        <img src="img/b1.jpg" width="800">
        

        <div class="login">
            <h1 class="heading">Admin login</h1>
            <div class="log">
            <?php
            	if(isset($_POST["login"]))
            	{
            		$sql="select * from admin where ANAME={$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
            		{$_POST["apass"]}'";
            		$res=$db->query($sql);
            		if($res->num_row>0)
            	    {
            		
            	        $ro=$res->fetch_assoc();
            	        $_SESSION["AID"]=$ro["AID"];
            	        $_SESSION["ANAME"]=$ro["ANAME"];
            	        echo "<script>window.open('admin_home.php','_self');</script>
            	        

            	    }	
            	    else
            	    {
            	    	echo"<div class='error'>Invalid Username or Password</div>
            	    }
            	}
            ?>	



                <form method="post" action="<?php echo $_SERVER["PHP_SELF];?>">
                	<label>User Name</label><br>
                	<input type="text" name="aname" required class="input"><br><br>
                	<label>Password</label><br>
                	<input type ="Password" name="apass" required class="input"><br>
                	<button type="submit" class="btn" name="login">Login Here</button>
                </form>
           </div>
      </div>
      <div class="footer">
          <footer><p>Copyright</p></footer>
      </div>
      


 
    </body>
</html>                    












