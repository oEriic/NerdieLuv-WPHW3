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
                <img src="imgResources/nerdLuvBanner.png" alt="Banner Logo">
            </a>
        </div>

		<?php
			//$myfile = fopen("singles.txt", "w") or die("Unable to open file!");
			$myfile = "singles.txt";
			$txt = $_POST["userName"] . ",";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["gender"] . ",";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["age"] . ",";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["userPersonality"] . ",";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["oslist"] . ",";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["minAge"] . ",";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			$txt = $_POST["maxAge"] . "\n";
			file_put_contents($myfile, $txt, FILE_APPEND | LOCK_EX);
			//fclose($myfile);
		?>
		<h1>Thank you!</h1>
		<p>
			Welcome to NerdieLuv, 
			<?= $_POST["userName"] ?>
		</p>
		<p>Now <a href="matches.php">log in to see your matches!</a></p>

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

