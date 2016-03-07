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
							
                            
  							<p>No. Of Characters : <span class="badge" id="textcount">0</span></p>
  							<div id="CounterDiv"></div>
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
	/*$( "#description" ).keypress(function() {
  		var textcount = $("#description").val().length+1;
  		$("#textcount").html(textcount);
	});*/
	
    $('#description').bind('keypress', function(e) {
        
        var code = e.keyCode || e.which;
        if(code == 13) {
            var textcount = $("#description").val().length;
        } else {
            var textcount = $("#description").val().length+1;
        }
        
        $("#textcount").html(textcount);
        
        var desc = $("#description").val().replace(/\n/g,"<br />");   
        
        
        var info = 'desc=' + desc + '&code=' + code ;
        
        if(code == 13) { //Enter keycode
           
           $.ajax({
               type: "POST",
               url: "searchcount.php",
               data: info,
               success: function(response){
                $("#CounterDiv").html(response);   
             }             
            });
        }
       
    });
   
        
    </script>
    
  </body>
</html>
