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
	
	/*
		alright, libraries
		php pdf library (google FPDF)
		
		$pdf = new FPDF();
		$pdf->AddPage();
	*/
	
	/*
		Midterm: short answer/code
		1. Structure of a PHP program
			<?php ... ?>
			
		2. Define variables in php
			$vn = "hello";
			
		3. Expressions
			$vn = (12 + 4) * 2;
			$vn2 = (12 + 4) * 2; (PEMDAS)
		
			how to create strings using "."
			$x = "a".$x."b";
			
		4. Use IF Statement
			> < >= <= !=
			if()
			{
				
			}
			else
			{
				
			}
		5. Be able to use for()
			for($i=0; $i<12; $i++)
				
		6. Define and use an array
			$arrx = array();
			$arrx[] = "abc";
			understand indexes
			understand sizeof($arr)
			
		(no mysql stuff)
		
		7. Functions
			define and use a function
			pass data to a function and return data from function
			function ABC($v1)
			{
				$v1 = $v1 + 12;
				return $v1;
			}
			
			$x = ABC(12); //$x set to 24
	*/
?>