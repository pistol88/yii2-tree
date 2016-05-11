<?php

use yii\helpers\Html;
use yii\web\View;

?>
<div class="tree-index">
	<div class="categories-tree">
		<form action="" method="post">
			<input type="hidden" name="action" value="updateSort" />
			<ul>
				<?=$categoriesTree; ?>
			</ul>
		</form>
	</div>
	

</div>
