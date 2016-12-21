<!DOCTYPE html>
<html lang="en">

  <?php include "inc/head.inc"; ?></head>

<body>

  <?php include "inc/nav.inc"; ?>
  <section >
  <div class="container content">

	  <h1>Contact Page</h1>
	  <p>If you would like to contact Sophie Wu for more information about her work, enter your information in the form below.</p>

	  <form method="post" action="database-write.php">
			<div>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name"> <br>
			</div>

			<div>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email"> <br>
			</div>

			<div>
				<label for="phone">Phone number:</label>
				<input type="tel" name="phone" id="phone"> <br>
			</div> <br>

			<label for="message">Message</label><br>
			<textarea name="message" id="message"></textarea>

			<input type="submit" value="Send">

		</form>

		<p>You will be automatically redirected to the home page after your information is saved.</p>
    </div>
</section>

</body>

</html>
