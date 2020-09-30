<form method="<?= $method ?>" action="<?= $action ?>">
	<?php foreach ($inputsArr as $key => $input) : ?>
		<div>
	    	<input type="<?= $input['type'] ?>" 
	        	name="<?= $input['name'] ?>" 
	        	value="<?= $input['value'] ?>">
	    </div>    	
    <?php endforeach; ?>
	<input type="submit" value="<?= $submitTxt ?>">
</form>