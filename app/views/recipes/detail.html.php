Menu : <?=$recipe->name;?> <br/>
Ingredients : 
<ul>
	<?php foreach($recipe->ingredient as $ingredient) { ?>
	<li><?=$ingredient->name?></li>
	<?php } ?>
</ul>
<?=$this->html->link('Back to list', 'Recipes::index')?><br/>