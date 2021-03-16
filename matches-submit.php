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
        <?php
            // Create variables needed to store matches / info
            $file = fopen("singles.txt", "r") or die("Unable to open file!"); // open file for read
            $matches = array();
            $info = array();
            $index = 0;
            
            // while loop to store info from file
            while(!feof($file)){
                $line = fgets($file);
                array_push($info, $line);
                $info[$index] = explode (",", $line);
                $index++;
            }
            fclose($file); //close file
        ?>

        <h2> Matches for 
            <?php $name = $_GET["userName"]; print $name?>
        </h2>
            
            <?php
                // variables for matching
                $userPos = 0; // position of user
                $matches = array(); // array to store matches

                for($i = 0; $i < count($info)-1; $i++){ // search array for user by comparing name to every list until found
                    if(strcmp($info[$i][0], $name) == 0){
                        $userPos = $i; // store user pos
                    }
                }
                
                //Sync info with user's properties
                $gender = $info[$userPos][1];
                $age = $info[$userPos][2];
                $type = $info[$userPos][3];
                $os = $info[$userPos][4];
                $minAge = $info[$userPos][5];
                $maxAge = $info[$userPos][6];

                // Find matches
                for($i = 0; $i < count($info) - 1; $i++){
                    if($info[$i][1] != $gender){ // used not equal to find opposite gender match
                        if($info[$i][2] >= $minAge && $info[$i][2] <= $maxAge && $info[$i][6] >= $age && $info[$i][5] <= $age){ // check age range for both user and matched
                            if($info[$i][4] == $os){ // check same os
                                for($j = 0; $j < strlen($info[$i][3]); $j++){ //Check personality type 
                                    if(strpos($type, $info[$i][3][$j])){
                                        array_push($matches, $info[$i]);
                                        break; // break after match to continue
                                    }
                                }
                            }
                        }
                    }
                }
                // display matches
                for($i = 0; $i < count($matches); $i++){
            ?>
            <div class="match">
                <p>
                    <img src="imgResources/userIcon.png" alt="Match Photo" width="150px">
                    <b>
                    <?php 
                        print $matches[$i][0];
                    ?>
                    </b>
                </p>
                <ul>
                    <li><b>Gender:</b> 
                        <?php 
                            print $matches[$i][1];
                        ?>
                    </li>
                    <li><b>Age:</b> 
                        <?php 
                            print $matches[$i][1];
                        ?>
                    </li>
                    <li><b>Type:</b> 
                        <?php 
                            print $matches[$i][1];
                        ?>
                    </li>
                    <li><b>OS:</b> 
                        <?php 
                            print $matches[$i][1];
                        ?>
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

