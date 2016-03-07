<?php

include_once("header.php");
?>
  <body>

    <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
            <div class="search-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title text-center">Search Box</h3>  
                </div>  
                <div class="panel-body">  
                    
                        <fieldset>  
							
                            <div class="form-group">
                                <label for="exampleInputdes">Description</label>                                
                                <textarea class="ckeditor" placeholder="Please Enter atleast 10 sentence" name="description" id="description" cols="135" rows="15" tabindex="1" required autofocus></textarea>
                            </div>                            
							<div class="form-group"> 
                            	<label for="registerusername11">Search Text</label> 
                                <input type="text" placeholder="Search Text" id="searchtext" name="searchtext" value="" class="form-control" tabindex="2" required autofocus>  
                            </div> 
                            <input class="btn btn-lg btn-success search" type="submit" value="search" name="searchtextbtn" >  
  							<div id="SomeDiv"></div>
                        </fieldset>  
                   
                    
                </div>  
            </div>  
        </div>  
    </div>  
	</div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="lib/js/bootstrap.min.js"></script>
    <script>
	$(function() {
	$(".btn.btn-success.search").click(function(){
	
	var desc = $("#description").val().replace(/\n/g,"<br>");	
	var searchtext = $("#searchtext").val();
	
	var info = 'desc=' + desc + '&search=' + searchtext	;
	
	 $.ajax({
	   type: "POST",
	   url: "searchresult.php",
	   data: info,
	   success: function(response){
	   	$("#SomeDiv").html(response);   
	 }
	});
      
	 
	});
	});
	
    </script>
    
  </body>
</html>
