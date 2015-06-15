<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
		<style type="text/css">
			h2 {
				text-decoration: line-through;
				color: green;
			}
		</style>
			<link rel="stylesheet" type="text/css" href="/css-demo.css">
<title>My First Form</title>
</head>
<body>
	<form method="POST" action="/my_first_form.php">
    
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="username" autofocus required>
    
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="password" autofocus required>
    
        <input name="submit" type="Submit"<button type="What is This" /button>
	</form>


	<section class="form">
		<form method="POST" action="/my_first_form.php">
			<p>
				<h2>User Login</h2>
				<label for="TO">TO</label>
				<input id="TO" name="To" type="text" placeholder="Who?">
			</p>
			
			<p>
				<label for="subject">Subject</label>
				<input id="Subject" name="Subject" type="text" placeholder="message?">
			</p>
			<p>	
				<label for="From">From</label>
				<input id="From" name="From" type="text" placeholder="From?">
			</p>
			<P>
				<h2>Compose an Email</h2>
				<textarea id="email_body" name="email_body" rows="5" cols="40">Ye ol' Message box</textarea>
			</P>

			<input name="submit" type="submit">

			<input type="checkbox" id="save" name"save" value="yes"</p>

		</form>
			<form method="POST" action="/my_first_form.php">
			<h2> Multiple CHoice Test</h2>
				<p><em>Isnt codeup friggin Awesome?</em></p>
				<label>NOPE</label>
				<input type="radio" name="q1" value="Nope">
				
				<label>SURE</label>
				<input type="radio" name="q2" value="Sure">
				

				<LABEL>MAYBE</LABEL>
				<input type="radio" name="q3" value="MAYBE">

				<label>IDONTEVEN</label>
				<input type="radio" name="q4" value="IDONTEVEN">

				<label>rm -rf/</label>
				<input type="radio" name="q5" value="rm -rf/">
				<input type="submit" name="submit">
		</form>

		<form>
			<form method="POST" action="/my_first_form.php">
			<h2>How many licks does it take to get to the tootsie roll center of a tootsie pop?</h2>
				<label><input type="checkbox" id="os1" name="os[]" value="ONE"> One</label>
				<label><input type="checkbox" id="os2" name="os[]" value="TWO"> Two</label>
				<label><input type="checkbox" id="os3" name="os[]" value="THREE"> Three</label>
				<label><input type="checkbox" id="os4" name="os[]" value="CRUNCH"> CRUNCH</label>
				<input type="submit" name="submit">
				<button>Send IT</button>
		</form>

		<form method="post" action="/my_first_form.php">
			<h2>Select Testing</h2>
				<p>So, here is Yet another question - would you like to awnser?</p>
				<label>Yes<input type="checkbox" id="os1" name="Yes" value="1" placeholder="yes"></label>
				<label>No<input type="checkbox" id="os2" name="No" value="2" placeholder="No"></label>
				<label>Riddle me This</label>
				<select>Test your might.
					<option>Yes</option>
					<option selected>No</option>
					<input type="submit" name="submit"
				</select>
		</form>



	</section>


	</form>
</body>
