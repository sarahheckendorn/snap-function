<?php

$paramArray = [ //this is your array
	["name"=>"foo", "age" => 1],
	["name"=>"bar", "age"=>2],
	["name"=>"baz", "age"=>3],
	["name"=>"qux", "age"=>4]

];
// use docblocks to actually explain what the function is supposed to do accordingly
/**
 * A function that takes an associative array of people with names and ages and returns an average age.
 *
 * @param array $personsArray an array of people
 * @return int $averageAge average age of people in the array
 */
//function, function name then feed in the arguments/paraments into the parentheses. we want the return to float, so we specify
function averageAge(array $personsArray) : float {
//this is to add to the value
	$totalAge = 0;
// creating our foreach, we pass in the array we're working with $personsArray, then we specify what each value will be called $person
	foreach($personsArray as $person) {
		//PHP_EOL creates a new line when outputting values from the script.
		//echo the name and age, then add the persons age to the total age. go ahead and run from here before finishing
		echo $person["name"] . "is " . $person["age"] . PHP_EOL;
		$totalAge += $person["age"];
	}
	//make sure your $totalAge is the correct number
		echo "total ages is " . $totalAge . PHP_EOL;

// return out total age and divide by count which automatically calculates how many arrays there are (up in paramArray)
	return ($totalAge / count($personsArray));
}
/** now we echo outside of the function because of our return function up above (which stops the text from running) and
we give text to display as well as calling our array namespace
	*/
echo ("the average age is " . averageAge($paramArray) . PHP_EOL);