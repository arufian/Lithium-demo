<?=$this->form->create(null, array('url' => '/recipesite/recipes/')); ?>
    <?=$this->form->field('search', array('label'=>'Search with name')); ?>
    <?=$this->form->submit('Save'); ?>
<?=$this->form->end(); ?>
<?=$this->html->link('add', 'Recipes::add')?><br/>
Recipe List :  <br/>
<?php if($recipes->count()) { ?>
<ul>
	<?php foreach($recipes as $recipe) { ?>
	<li><?=$this->html->link($recipe->name,'/recipes/detail/'.$recipe->_id); ?></li>
	<?php } ?>
</ul>
<?php }  ?> <br/>