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
        <h2> Matches for 
            <?= $name = $_GET["userName"]?>
        </h2>
            
            <?php
                include_once 'common.php';
                storeMatchInfo();
                $match=array();
                $match=checkMatch();
                // display matches
                for($i = 0; $i < count($match); $i++){
            ?>
            <div class="match">
                <p>
                    <img src="imgResources/userIcon.png" alt="Match Photo" width="150px">
                    <b>
                    <?= $match[$i][0]?>
                    </b>
                </p>
                <ul>
                    <li><b>Gender:</b> 
                        <?= $match[$i][1]?>
                    </li>
                    <li><b>Age:</b> 
                        <?= $match[$i][2]?>
                    </li>
                    <li><b>Type:</b> 
                        <?= $match[$i][3]?>
                    </li>
                    <li><b>OS:</b> 
                        <?= $match[$i][4]?>
                    </li>
                </ul>
            </div>
            <?php
            }
            ?>

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

