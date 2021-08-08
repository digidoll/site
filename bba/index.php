<?php
 $pageTitle = "- home";

 require_once( 'assets/include/header.php' );
 ?>

<div id="hm">
	<h1> .01
	<span> about us </span></h1>

  <div class="newspaper">
  <div class="news"> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. </div>

  <div class="news2"> <p>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p> </div>
  </div>
</div>

</div>
</div>
</section>

<img id="banner" src="/site/bba/assets/img/banner.png">

<div class="email">
  <h1> .02
  <span> contact us </span></h1>

  <p> Have questions? Get in touch! From events in your area to what’s happening, we look forward to hearing from you soon.

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
