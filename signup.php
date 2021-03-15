<!DOCTYPE html>
<html>
	<!--  Assignment 03: NerdieLuv -->
	<!-- shared page top HTML -->
	
	<head>
		<title>NerdieLuv</title>
		<link rel="stylesheet" href="https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg03/nerdieluv.css">
        <link rel="stylesheet" href="common.css">
		<meta charset="utf-8" />
	</head>

	<body>
		<!-- your HTML output follows -->
		<div>
            <a href="index.php">
                <img src="imgResources/nerdLuvBanner.png" alt="Banner Logo">
            </a>
        </div>

		<div>
            <h1>
                Sign Up!
            </h1>
            <form action="signup-submit.php" method="POST" id="signForm">
                <label for="name">Name: </label>
                    <input type="text" name="userName" id="name" maxlength="16"/>
                </br>
                
                <label> Gender: </label>    
                    <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label> 
                </br>
                
                <label for="age"> Age: </label>
                    <input type="text" name="age" id="age" size="6" maxlength="2"/> 
                </br>
                
                <label for="personality"> Personality Type: </label>
                    <input type="text" name="userPersonality" id="personality" size="6" maxlength="4"/> 
                        (<a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">Don't know your type?</a>)
                </br>
                
                <label for="os">Favorite OS: </label>
                    <select id="os" name="oslist" form="signForm">
                        <option value="windows" selected>Windows</option>
                        <option value="mac">Mac OS X</option>
                        <option value="linux">Linux</option>
                    </select>
                </br>
                
                <label for="seekingAge"> Seeking age: </label> 
                    <input type="text" name="minAge" size="6" maxlength="2" placeholder="Min"/> to <input type="text" name="maxAge"  size="6" maxlength="2" placeholder="Max"/>
                </br>
            </form>
            <button type="submit" form="signForm" value="Submit"> Sign Up </button>
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

