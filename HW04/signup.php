<!DOCTYPE html>
<html>
	<!--
	CSE 154, Homework 4 (NerdLuv)
	This provided file is the front page that links to two of the files
	you are going to write, signup.php and matches.php.
	You can modify this file as necessary to move redundant code out to common.php.
	-->
	
	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="https://webster.cs.washington.edu/images/nerdluv/heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="https://webster.cs.washington.edu/css/nerdluv.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="bannerarea">
			<img src="https://webster.cs.washington.edu/images/nerdluv/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>

		<div> <!-- Matches Form -->
			<form action="signup-submit.php" method="post">
			<fieldset>
				<ul>
					<strong>Name:</strong>
				</ul>
				<input type="text" size="16" name="name"/>
				<br/>

				<ul>
					<strong>Gender:</strong>
				</ul>
				<input type="radio" name="gender" value="male"/> Male
				<input type="radio" name="gender" value="female" checked="checked"/> Female
				<br/>

				<ul>
					<strong>Age:</strong>
				</ul>
				<input type="text" size="6" name="age"/>
				<br/>

				<ul>
					<strong>Personality type:</strong>
				</ul>
				<input type="text" size="6" name="type"/>
				<br/>

				<ul>
					<strong>Favorite OS:</strong>
				</ul>
				<select name="os">
					<option value="windows">Windows</option>
					<option value="osx">Mac OS X</option>
					<option value="linux">Linux</option>
				</select>
				<br/>

				<ul>
					<strong>Seeking age:</strong>
				</ul>
				<input type="text" size="6" placeholder="min" name="min"/>to
				<input type="text" size="6" placeholder="max" name="max"/> 
				<br/>

				<input type="submit" value="Sign Up" />
				
			</fieldset>
			</form>
		</div> <!-- Matches Form -->

		<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			
			<ul>
				<li>
					<a href="nerdluv.php">
						<img src="https://webster.cs.washington.edu/images/nerdluv/back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>

		<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML" /></a>
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
