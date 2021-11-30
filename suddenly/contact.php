<?php
 $pageTitle = "#about";
 require_once( 'assets/include/header.php' );
 ?>

<h1> contact <hr> </h1>


<form action="assets/include/mail.php" method="POST">
<p>Name <input type="text" name="name"></p>
<p>Email <input type="text" name="email"></p>


<p>Type
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select></p>


<p>Message</p>
<textarea name="message" class="msg" rows="8" cols="28"></textarea>
<br />
<br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>



<?php
require_once( 'assets/include/footer.php' );
?>
