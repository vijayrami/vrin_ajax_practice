<?php

if($_POST['desc'] && $_POST['search'])
{
    $desc = $_POST['desc'];
    $search = $_POST['search'];
    $descarray = explode("<br>",$desc);
    
    $countarray = count($descarray);
    if ($countarray < 10){
		echo "<h2>Please Enter atleast 10 sentence";
	}else{
		if (stristr($desc,$search)){
			foreach ($descarray as $array){
				$findtext = $search;
				$replacetext = "<b>".$search."</b>";
				$strcount =  substr_count($array,$search);
				echo (str_ireplace($findtext,$replacetext,$array))." <span class='badge'>".$strcount."</span><br/>";
				
			}
		}else{
			echo "<h2>No text Found</h2>";
		}
	}
    
    
} elseif (empty($_POST['desc'])) {
	echo "<h2>Please Enter Text in Textarea.</h2>";
} elseif (empty($_POST['search'])) {
	echo "<h2>Please Enter search text.</h2>";
	
} else {
	echo "<h2>There is some error.</h2>";
}
?>