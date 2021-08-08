<?php
 $pageTitle = "#about";
 require_once( 'assets/include/header.php' );
 ?>

<h1> contact <hr> </h1>
<div class="email">
<div id="content">
  <form method="post" name="myemailform" action="form-to-email.php">
Name:	<input type="text" name="name">
Email Address:	<input type="text" name="email">
Phone Number:	<input type="text" name="phone">
Barbershop:	<input type="text" name="shop">
Tell us about your needs:	<textarea name="message"></textarea>
<input type="submit" value="Send Form">
</form>
</div>

<?php
require_once( 'assets/include/footer.php' );
?>
