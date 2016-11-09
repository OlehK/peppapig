<?php
/**
  * Template name: Party
 */
get_header(); ?>
<?php
	/* I realy sorry for this code! If you are read this code, I hope you not die! */  
	/*$link = new PDO("mysql:host=localhost;dbname=Pepa","root","");*/

    /*$set = $link->prepare("SET NAMES 'utf8");
    $set2 = $link->prepare("SET CHARACTER SET 'utf8'");

    $set->execute();
    $set2->execute();*/

     if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $name = $_POST['Your_Name'];
        $telephone = $_POST['Telephone'];
        //$time = time();
        $message = $_POST['Comentar'];
        $to = "koguto1752@gmail.com";
		
		$subject = "Pig party";
		
		$headers = "From: $email\r\nReply-to: $name\r\nMy telephone number: $telephone\r\n  ";
		mail($to, $subject, $message, $headers);
        
        

        /*$statement = $link->prepare("INSERT INTO registr(email, Your_Name, Telephone, Comentar) VALUES(?, ?, ?, ?)") or die(mysqli_error($statement));
        $statement->execute(array($email, $name, $telephone, $comentar));*/
        
    }
?>

	<div id="wrapper">
	<div id="wrapper2">
		<div id="wrapper-bgtop">
			<div id="page">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#"></a>hyyyyyyyyyyyyyhhhhhhh</h2>
						<p class="meta"><span class="date">December 12, 2011</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<form name="reg_form" action="" method="post">
			<h3>
				<label for="email">E-mail</br>
				<input type="email" name="email" placeholder= "E-mail" class="input_reg" required /><br></label>
			</h3>
			<h3>
				<label for="Your Name">Your Name</br>
				<input type="text" name="Your_Name" placeholder= "Your Name" class="input_reg" required /><br></label>
			</h3>
			<h3>
				<label for="Telephone">Telephone</br>
				<input type="text" name="Telephone" placeholder= "Telephone" class="input_reg" required /><br></label>
			</h3>
			<h3>
				<label >Comentar</br>
				<textarea type="text" rows="10" cols="45" name="Comentar" placeholder= "Comentar"></textarea><br></label>
            </h3>

		<input id="submit" type="submit" name="submit" value="Send" required />
	</form>
						</div>
					</div>
					
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>
	</div>
</div>
  
  
  
  
	  


</div><!-- #main -->




<?php get_footer(); ?>
</body>
</html>
