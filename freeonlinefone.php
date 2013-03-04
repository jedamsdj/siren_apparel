<html>
	<link rel="stylesheet" href="css/freeonlinefone.css">
	<body class = "background">
		<img src = "images/freeonlinefone.png" class = "logo"/> 
		<form action="freeonlinefone.php" method="post">
			<p class = "text">Welcome to freefone.com! FreeFone is easy to use. Enter the <i>email address</i> of the 
			phone which you wish to contact. For example, if "##########" 
			is the number of the person you want to text, then their phone's email would be:</p>
			<p class = "text">##########@vtext.com                for Verizon phones</p>
			<p class = "text">##########@txt.att.net              for AT&T phones</p>
			<p class = "text">Phone Email Address: <input type="text" name="number" /></p>
		   <p class = "text">Message To Send: <input type="text" name="information"/></p>
		   <p class = "smalltext">Note: 'Sent using sirenapparel.org/freeonlinefone.php (TM)' will be added to the end of the message.</p>
		   <input type="submit" name="submit" value="Send Message" class = "text" />
		</form>
	</body>
</html>

<html>
<p class = "text"> 
	<?php

		if(isset($_POST['information']))//if the value is set, then show the message. otherwise show nothing
			echo ("Message you just sent: '" . $_POST['information'] . "' to " . $_POST['number'] . "." . "<br />\n"); 

	?>
</p>


<?php
	$subject = "";
	$email = "";
	$message = $_POST['information'];
	$message .= " Sent using sirenapparel.org/freeonlinefone.php (TM)"; //append our sevice to the message
	mail($_POST['number'], $subject, $message, $email);
?>


	

