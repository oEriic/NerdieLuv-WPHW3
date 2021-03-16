<!DOCTYPE html>
<html>
	<!--  Assignment 03: NerdieLuv -->
	<!-- shared page top HTML -->
	
	<head>
		<title>NerdieLuv</title>
		<link rel="stylesheet" href="https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg03/nerdieluv.css">
		<meta charset="utf-8" />
	</head>

	<body>
		<!-- your HTML output follows -->
		<div>
            <a href="index.php">
                <img src="imgResources/nerdLuvBanner.png" alt="Banner Logo" style="margin-left: auto;">
            </a>
        </div>
</br>
		<div>
			<form action="matches-submit.php" method="get">
			<fieldset>
                <legend>
                    Returning user:
                </legend>
                    <label for="name">Name: </label>
                        <input type="text" name="userName" id="name" maxlength="16"/>
                    </br>
                    <input type="submit" value="View Matches">
                </fieldset>
			</form>
		</div>

		<!-- shared page bottom HTML -->
		<div>
			<p>
				This page is for single nerds to meet and date each other! </br> 
                Type in your personal information and wait for the nerdly luv to begin!</br> 
                Thank you for using our site.
			</p>
			
			<p>
                Results and page (C) Copyright NerdieyLuv Inc.
			</p>
			
			<ul>
				<li>
                <p>
                    <a href="index.php">
					    <img src="imgResources/backarrow.png" alt="Back to Home" height="50" width="50" > 
                        Back to front page 
                    </a>
                </p>
				</li>
			</ul>
		</div>

		
	</body>
</html>

