<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript">
   $(window).load(function() {
        var i = $('#ingredients').size() + 1;
	
	$('#add').click(function() {
		$('<div id="ingredients"><input type="text" name="ingredient[]" /></div>').fadeIn('slow').appendTo('.inputs');
		i++;
	});
	
	$('#remove').click(function() {
	if(i > 1) {
		$('#ingredients:last').remove();
		i--; 
	}
	});
    });
</script>
<form action="/recipesite/recipes/add" method="post">    
   <div><label for="Name">Name</label><input type="text" name="name" id="Name" /></div>    
   <div>
       <label>Ingredient</label>
       <div class="inputs">
        <div id="ingredients"><input type="text" name="ingredient[]" /></div>
       </div>
       <a href="#" id="add">[Add]</a> | <a href="#" id="remove">[Remove]</a>
   </div>    
   <input type="submit" value="Add Recipe" />
</form>