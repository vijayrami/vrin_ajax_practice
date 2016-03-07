<?php

if($_POST['desc'] && $_POST['code'])
{
    $desc = $_POST['desc'];
    $code = $_POST['code'];
    
    
    $strlen = strlen($desc);
    $spaces =  substr_count($desc," ");
    
    $textoutspaces = $strlen - $spaces;
    
    $texwordcount = str_word_count($desc);
    
    echo '<p>No. Of Characters Without Spaces: <span class="badge" id="textoutspacescount">'.$textoutspaces.'</span></p>
          <p>Total No. Of Words in Characters: <span class="badge" id="textwordcount">'.$texwordcount.'</span></p>';
    //echo print_r($descarray);
    /*if ($countarray < 10){
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
    }*/
    
    
}
?>