<?php

// Icon
if ($props['icon']) {

	$icon = $this->el('span', [

		'class' => [
			'el-icon',
			'uk-text-{icon_color}',
			'uk-background-{icon_background}',
			'uk-margin[-{image_margin}]-top {@!image_margin: remove} {@image_align: between}',
		],

		'uk-icon' => [
			'icon: {0};' => $props['icon'],
			'ratio: {icon_ratio};',
		],

		'style' => [
			'background-color: {icon_background};',
			'border-color: {icon_border};',
		],

	]);

	echo $icon($element, '');
}
