<?php

$el = $this->el('div', [

	'class' => [
		'timeline-container',
	]

]);

?>

<?= $el($props, $attrs) ?>

	<?php foreach ($children as $child) : ?>
	<div><?= $builder->render($child, ['element' => $props]) ?></div>
	<?php endforeach ?>

</div>
