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
		<?php
            function storeInfo(){
                // Create file and store info into singles.txt
                $singlesFile = "singles.txt";
                global $name;
                $name = $_POST["userName"] . ",";
                file_put_contents($singlesFile, $name, FILE_APPEND | LOCK_EX);
                $gender = $_POST["gender"] . ",";
                file_put_contents($singlesFile, $gender, FILE_APPEND | LOCK_EX);
                $age = $_POST["age"] . ",";
                file_put_contents($singlesFile, $age, FILE_APPEND | LOCK_EX);
                $persona = $_POST["userPersonality"] . ",";
                file_put_contents($singlesFile, $persona, FILE_APPEND | LOCK_EX);
                $os = $_POST["oslist"] . ",";
                file_put_contents($singlesFile, $os, FILE_APPEND | LOCK_EX);
                $minAge = $_POST["minAge"] . ",";
                file_put_contents($singlesFile, $minAge, FILE_APPEND | LOCK_EX);
                $maxAge = $_POST["maxAge"] . "\n";
                file_put_contents($singlesFile, $maxAge, FILE_APPEND | LOCK_EX);
            }

            function storeMatchInfo(){
                // Create variables needed to store matches / info
                $file = fopen("singles.txt", "r") or die("Unable to open file!"); // open file for read
                global $info;
                $info = array();
                $index = 0;
                global $name;
                
                // while loop to store info from file
                while(!feof($file)){
                    $line = fgets($file);
                    array_push($info, $line);
                    $info[$index] = explode (",", $line);
                    $index++;
                }
                fclose($file); //close file

                // variables for matching
                global $userPos;
                $userPos = 0; // position of user
                global $matches; // array to store matches
                $matches = array();

                for($i = 0; $i < count($info)-1; $i++){ // search array for user by comparing name to every list until found
                    if(strcmp($info[$i][0], $name) == 0){
                        $userPos = $i; // store user pos
                    }
                }               
            }

            function checkMatch(){
                global $userPos;
                global $info;
                global $matches;
                //Sync info with user's properties
                $gender = $info[$userPos][1];
                $age = $info[$userPos][2];
                $type = $info[$userPos][3];
                $os = $info[$userPos][4];
                $minAge = $info[$userPos][5];
                $maxAge = $info[$userPos][6];
                // Find matches
                // Find matches
                for($i = 0; $i < count($info) - 1; $i++){
                    if($info[$i][1] != $gender && $info[$i][4] == $os && $info[$i][2] >= $minAge && $info[$i][2] <= $maxAge && $info[$i][6] >= $age && $info[$i][5] <= $age){ 
                        // used not equal to find opposite gender match
                        // Check for os match
                        // check age range for both user and matched
                        // stacked all if statements because it was 'bad Cognitive Complexity
                        for($j = 0; $j < strlen($info[$i][3]); $j++){ //Check personality type 
                            if(strpos($type, $info[$i][3][$j])){
                                array_push($matches, $info[$i]);
                                break; // break after match to continue
                            }
                        }
                    }
                }
            }
		?>
	</body>
</html>
