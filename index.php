<?php
	/*
		1. File I/O
		2. PHP Libraries
		3. Review Midterm
	*/
?>

<?php //file i/o stuff
	/*
		1. check to see if file exists.
		2. get file handle using the file name
		3. read entire file into variable (for small files) or loop through the file and read one line at a time.
		4. inside the loop check for end of file and process the data.
		
		Strategy
		
		A. Get the format of the file
			Mickey Mouse, good, 45.33, 5
			Superman, excellent, 123.33, 6
			
		B. Ask how the user will order the item
			Pick from a drop-down by name
			Enter a qty
			Show the total price
			
		C. What do you want the user to submit to your page?
		
		(created a CSV file)
		
		$filepath = $_SERVER['DOCUMENT_ROOT']."/data/collectibles.csv"
		if(!is_readable($filepath))
		{
			echo "Error reading file";
			exit();
		}
		$fh = fopen($filepath,"r");
		while(!feof($fh))
		{
			$lineoftext = fgets($fh);
		}
		
		//use array, put values from array into variables
		//use explode(",", $lineoftext);
		
		//use trim() method
		
		//make sure there's not a blank line at end of csv file
	*/
?>